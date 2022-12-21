<div class='shadow-bigCard'>
    @if($type ==='xxolstar')
    <h1  @class([
        'cursor py-3 font-medium text-fifth pl-8 pr-24' => $active !=='edit',
        'cursor py-3 font-medium text-fifth pl-8 pr-24 bg-secondary2 bg-opacity-40' => $active ==='edit',
    ])
    wire:click="viewEditProfile({{json_encode($xxolstar)}})">
            Edit
    </h1>
    @endif
    @if($type ==='client')
    <h1  @class([
        'cursor py-3 font-medium text-fifth pl-8 pr-24' => $active !=='edit',
        'cursor py-3 font-medium text-fifth pl-8 pr-24 bg-secondary2 bg-opacity-40' => $active ==='edit',
    ])

    wire:click="viewEditProfile({{json_encode($client)}})">
            Edit
    </h1>
    @endif

    @if($type ==='xxolstar')
    <h1
    @class([
        'cursor py-3 font-medium text-fifth pl-8 pr-24' => $active !=='delete',
        'cursor py-3 font-medium text-fifth pl-8 pr-24 bg-secondary2 bg-opacity-40' =>  $active ==='delete',
    ])
     wire:click="deleteXxolstar({{$xxolstar['id']}})"
    >Delete</h1>
    @endif

    @if($type ==='client')
    <h1
    @class([
        'cursor py-3 font-medium text-fifth pl-8 pr-24' => $active !=='delete',
        'cursor py-3 font-medium text-fifth pl-8 pr-24 bg-secondary2 bg-opacity-40' =>  $active ==='delete',
    ])
     wire:click="deleteXxolstar({{$client['id']}})"
    >Delete</h1>
    @endif
</div>