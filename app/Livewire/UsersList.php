<?php

namespace App\Livewire;

use App\Models\User;
use league\Flysystem\MountManager;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class UsersList extends Component
{
    use WithPagination;

    public $search;
//    public $activeUsers;

    public function mount($search)
    {
        $this->search = $search;
//        $this->activeUsers = User::latest()->get();
        unset($this->users);
    }

//    #[Computed(persist: true, seconds: 3600, cache: true)]
    #[Computed()]
    public function users()
    {
        return User::latest()
                ->where('name', 'like', "%{$this->search}%")
                ->paginate(5);
    }

//    public function update()
//    {
//        $users = User::latest()
//            ->where('name', 'like', "%{$this->search}%")
//            ->paginate(5);
//    }

//    public function render()
//    {
//        return view('livewire.users-list', []);
//    }
}
