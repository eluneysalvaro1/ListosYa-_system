<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\LaravelCharts;
use Illuminate\Support\Facades\DB;
use App\Http\Middleware\PermissionMiddleware;
use Spatie\Permission\Contracts\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('can:delete users')->only('destroy' , 'deleteUser');
        $this->middleware('can:edit users')->only('edit' , 'update');
        $this->middleware('can:show users')->only('index');
    }


    public function index()
    {
        $users = User::orderBy('id', 'desc')->paginate(15);
        
        return view('users.index', compact('users'));
    }

   
    public function data(Request $request, $id)
    {

        $user = User::find($id);
        $another = User::where('dni' , $request->dni)->first();
        
        if ($user->surname == null && $request->surname !== null) {
            $user->update([
                "surname" => $request->surname
            ]);
        }

        if ($user->birthday == null && $request->birthday !== null) {
            $user->update([
                "birthday" => $request->birthday
            ]);
        }

        if ($user->dni == null && $another == null) {
            $user->update([
                "dni" => $request->dni
            ]);
        }else{
            flash('Ese DNI ya se encuentra registrado' , 'error');
            return redirect()->back();
        }

        if ($user->telephone_number == null && $request->telephone_number !== null) {
            $user->update([
                "telephone_number" => $request->telephone_number
            ]);
        }

        if ($user->selectedCiudad == null && $request->selectedCiudad !== null) {
            $user->update([
                "ciudad_id" => $request->selectedCiudad
            ]);
        }

        if ($user->password == null && $request->password !== null) {
            $user->update([
                "password" => Hash::make($request->password)
            ]);
        }

        if ($user->direction == null && $request->direction !== null) {
            $user->update([
                "direction" => $request->direction
            ]);
        }

        if ($user->instagram == null && $request->instagram !== null) {
            $user->update([
                "instagram" => $request->instagram
            ]);
        }

        $email = $user->email;

        return redirect(route('successful', compact('email')));
    }


    public function editRole($role, $userId){

        $roleName = DB::table('roles')
                    ->where('id' , $role)
                    ->first();
        $user = User::find($userId);
        $user->assignRole($roleName->name);
    
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view("users.edit", compact("user"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $user = User::where('id', $id)->first();

        $another = User::where('email', $request->email)->first();
        $another2 = User::where('dni', $request->dni)->first();


        if ($user->email !== $another->email && $another !== null) {
            flash('No se ha podido editar el usuario', 'error');
        } elseif ($user->dni !== $another2->dni && $another2 !== null) {
            flash('No se ha podido editar el usuario', 'error');
        } elseif ($user == $another && $another !== null) {
            $user->update([
                'name' => $request->name,
                'surname' => $request->surname,
                'email' => $request->email,
                'dni' => $request->dni,
                "direction" => $request->direction,
                "instagram" => $request->instagram,
                'ciudad_id' => $request->selectedCiudad ? $request->selectedCiudad : $request->ciudad_id,
                'role_id' => $request->role_id
            ]);
            $this->editRole($request->role_id , $user->id);
            flash('Usuario editado con éxito.', 'success');
        } elseif ($user == $another2 && $another2 !== null) {
            $user->update([
                'name' => $request->name,
                'surname' => $request->surname,
                'email' => $request->email,
                'dni' => $request->dni,
                "direction" => $request->direction,
                "instagram" => $request->instagram,
                'ciudad_id' => $request->selectedCiudad ? $request->selectedCiudad : $request->ciudad_id,
                'role_id' => $request->role_id
            ]);
            $this->editRole($request->role_id , $user->id);

            flash('Usuario editado con éxito.', 'success');
        } elseif (($user !== $another && $another == null) || ($user !== $another2 && $another2 == null)) {
            $user->update([
                'name' => $request->name,
                'surname' => $request->surname,
                'email' => $request->email,
                'dni' => $request->dni,
                "direction" => $request->direction,
                "instagram" => $request->instagram,
                'ciudad_id' => $request->selectedCiudad ? $request->selectedCiudad : $request->ciudad_id,
                'role_id' => $request->role_id
            ]);
            $this->editRole($request->role_id , $user->id);

            flash('Usuario editado con éxito.', 'success');
        } elseif ($another == null && $another2 == null) {
            $user->update([
                'name' => $request->name,
                'surname' => $request->surname,
                'email' => $request->email,
                'dni' => $request->dni,
                "direction" => $request->direction,
                "instagram" => $request->instagram,
                'ciudad_id' => $request->selectedCiudad ? $request->selectedCiudad : $request->ciudad_id,
                'role_id' => $request->role_id
            ]);
            $this->editRole($request->role_id , $user->id);

            flash('Usuario editado con éxito.', 'success');
        } else {
            flash('No se ha podido editar el usuario 3', 'error');
        }

        return redirect(route('users.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        $user->delete();
        flash('Usuario eliminado con éxito', 'success');
        return redirect(route('users.index'));
    }


    public function deleteUser($id)
    {
        $user = User::find($id);
        $rta = false;
        if ($user->delete()) {
            $rta = true;
        }
        flash('Usuario eliminado con éxito', 'success');
        return $rta;
    }
}
