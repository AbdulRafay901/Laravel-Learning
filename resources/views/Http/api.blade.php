<div>
    <!-- When there is no desire, all things are at peace. - Laozi -->

    <!-- AcHa ye Http Client Side Rendring hoti he or Is hame Api call Krskhte he -->

    <h1>Http Client Side Rendring</h1>

    <p>{{$data->id}}</p>
    <p>{{$data->name}}</p>
    <p>{{$data->username}}</p>
    <p>{{$data->email}}</p>
    <p>{{$data->address->street}}</p>
    <p>{{$data->address->suite}}</p>


    {{print_r($data)}}
</div>
