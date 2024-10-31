<?php

use Livewire\Volt\Component;
use function Livewire\Volt\{layout};

layout('layouts.app', ['title' => 'Liste des hôtes']);

class HostsList extends Component
{
    // public $hosts = [];
// public function loadHosts()
// {
//     try {
//         $client = new Client();
//         $response = $client->request('GET', env('UNIFI_API_URL') . '/hosts', [
//             'headers' => [
//                 'X-API-KEY' => env('UNIFI_API_KEY'),
//                 'Accept' => 'application/json',
//             ],
//         ]);
//         $data = json_decode($response->getBody(), true);
//         $this->hosts = $data['hosts'] ?? [];
//         switch ($data['httpStatusCode']) {
//             case 200:
//                 session()->flash('success', 'Hôtes chargés avec succès.');
//                 break;
//             case 401:
//                 session()->flash('error', 'Clé API invalide.');
//                 break;
//             case 500:
//                 session()->flash('error', 'Erreur interne du serveur.');
//                 break;
//             default:
//                 session()->flash('error', 'Impossible de charger les hôtes.');
//                 break;
//         }
//     } catch (\Exception $e) {
//         session()->flash('error', 'Impossible de charger les hôtes.');
//     }
// }
// function mount()
// {
//     $this->loadHosts();
// }
}
?>

<div>
    @if (session('error'))
        <div class="bg-red-700 p-3 text-white">
            {{ session('error') }}
        </div>
    @endif
    {{-- {{ $hosts }} --}}
</div>
