<div class="table-responsive noSwipe">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th style="width:4%;">
                    {{-- <div class="custom-control custom-control-sm custom-checkbox">
                        <input class="select-all custom-control-input" type="checkbox" id="check1">
                        <label class="custom-control-label" for="check1"></label>
                    </div> --}}
                </th>
                <th style="width:10%;">Nazwa</th>
                <th style="width:10%;">Obszar</th>
                <th style="width:15%;">Moc</th>
                <th style="width:10%;">Generacja</th>
                <th style="width:10%;">Akcja</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <div class="custom-control custom-control-sm custom-checkbox">
                        <input class="custom-control-input select-all" type="checkbox" id="check-0">
                        <label class="custom-control-label" for="check-0"></label>
                    </div>
                </td>
                <td><span>Suma</span></td>
                <td> <span></span></td>
                <td><span></span></td>
                <td><span></span></td>
                <td class="text-right d-flex">
                    <a class="btn btn-space btn-secondary btn-xs mr-2 cursor-pointer">ON</a>
                    <a class="btn btn-space btn-secondary btn-xs mr-2 cursor-pointer">OFF</a>
                    <input class="form-control form-control-xs mr-3 input-range" type="number" value="100" max="100">
                    <a class="btn btn-space btn-secondary btn-xs mr-2 cursor-pointer">SET</a>
                </td>
            </tr>
            @foreach($clients_with_relations as $client)
                <tr>
                    <td>
                        <div class="custom-control custom-control-sm custom-checkbox">
                            <input class="select-item custom-control-input" type="checkbox" id="check-{{$client->id}}">
                            <label class="custom-control-label" for="check-{{$client->id}}"></label>
                        </div>
                    </td>
                    <td><span>{{$client->nazwaOdbiorcy}}</span></td>
                    <td> <span>{{$client->area}}</span></td>
                    <td><span>{{$client->mocUmowna}}</span></td>
                    <td><span>{{$client->generacja}}</span></td>
                    <td class="text-right d-flex">
                        <a class="btn btn-space btn-secondary btn-xs mr-2 cursor-pointer">ON</a>
                        <a class="btn btn-space btn-secondary btn-xs mr-2 cursor-pointer">OFF</a>
                        <input class="form-control form-control-xs mr-3 input-range" type="number" value="100" max="100">
                        <a class="btn btn-space btn-secondary btn-xs mr-2 cursor-pointer">SET</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>