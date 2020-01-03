<div class="title t-color5 mb-3 pl-4 pr-4">
    Tus productos favoritos
</div>
<div class="d-flex justify-content-between mb-5 pl-4 pr-4">
    <div class="pagination_info t-color6 roboto-regular"></div>
    <div class="t-color6 d-flex align-items-center roboto-regular">
        Ordenar por:
        <div class="col-md-4">
            <input type="text" class="form-control roboto-regular" id="serch-wish"  name="serch-wish" placeholder="Buscar por nombre o precio">
        </div>
    </div>
</div>
<div class="wish-list row justify-content-center mt-5">
    <table id="table_id" class="mt-5" data-page-length='2'>
        <thead>
            <tr>
                <th></th>
            </tr>
        </thead>
        <tbody class="row row-m-none">
            @foreach ($favorites as $prod)
                <tr>
                    <td>
                        @component('components.product',[
                            "Catproduct"=>[$prod]
                        ])
                        @endcomponent
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
