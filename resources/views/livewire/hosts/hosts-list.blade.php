<?php

use Livewire\Volt\Component;
use function Livewire\Volt\{mount};
use Illuminate\Support\Facades\Http;

class HostsList extends Component
{
    public $hosts = [];
    public function loadHosts()
    {
        try {
            $response = Http::withHeaders([
                'X-API-KEY' => env('UNIFI_API_KEY'),
                'Accept' => 'application/json',
            ])->get(env('UNIFI_API_URL') . '/hosts');

            $data = $response->json();
            $this->hosts = $data['hosts'] ?? [];
            switch ($data['httpStatusCode']) {
                case 200:
                    session()->flash('success', 'Hôtes chargés avec succès.');
                    break;
                case 401:
                    session()->flash('error', 'Clé API invalide.');
                    break;
                case 500:
                    session()->flash('error', 'Erreur interne du serveur.');
                    break;
                default:
                    session()->flash('error', 'Impossible de charger les hôtes.');
                    break;
            }

            dd($data);
        } catch (\Exception $e) {
            session()->flash('error', 'Impossible de charger les hôtes.');
        }
    }

    function mount()
    {
        $this->loadHosts();
    }
}
?>

<div>
    @if (session('error'))
        <div class="bg-red-700 p-3 text-white">
            {{ session('error') }}
        </div>
    @endif
</div>
