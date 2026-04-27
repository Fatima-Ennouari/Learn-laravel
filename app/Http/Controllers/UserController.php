<!-- <?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Storage;
// class UserController extends Controller {
//     private $file = 'users.json';
//Read json
//     private function getUsers(){
//         if(!Storage::exists($this->file)){
//             Storage::put($this->file, json_encode([]));
//         }
//         return json_decode(Storage::get($this->file), true);
//      }


// //Save json

//     private function saveUsers($users){
//         Storage::put($this->file, json_encode($users, JSON_PRETTY_PRINT));

//     }
// //index
//     public function index(){
//         $users =$this->getUsers();
//         return view ('users.index', compact('users'));
// }
// //create 
//     public function create(){
//         return view ('users.create');
// }
// //store
//     public function store(Request $request){
//         $request -> validate([
//             'nom'=> 'required',
//             'email'=> 'required|email',
//             'age'=> 'required|numeric|min:1'
//         ]);
//         $users = $this-> getUsers();
//         $newUser =[
//             'id' => time(),
//             'nom' => $request->nom,
//             'email' => $request->email,
//             'age' => $request->age
//         ];
//         $users[]= $newUser;
//         $this->saveUsers($users);
//         return redirect()->route('users.index')->with('success', 'User created successfully.');
//     }
// //EDIT
//     public function edit($id)
//     {
//         $users = $this->getUsers();
//         $user = collect($users)->firstWhere('id', $id);

//         return view('users.edit', compact('user'));
//     }

// //UPDATE
//     public function update(Request $request, $id)
//     {
//         $request->validate([
//             'nom' => 'required',
//             'email' => 'required|email',
//             'age' => 'required|numeric|min:1'
//         ]);

//         $users = $this->getUsers();

//         foreach ($users as &$user) {
//             if ($user['id'] == $id) {
//                 $user['nom'] = $request->nom;
//                 $user['email'] = $request->email;
//                 $user['age'] = $request->age;
//             }
//         }

//         $this->saveUsers($users);

//         return redirect()->route('users.index')->with('success', 'User modifié');
//     }

// // DELETE
//     public function destroy($id)
//     {
//         $users = $this->getUsers();

//         $users = array_filter($users, fn($u) => $u['id'] != $id);

//         $this->saveUsers(array_values($users));

//         return redirect()->route('users.index')->with('success', 'User supprimé');
//     }
// } -->