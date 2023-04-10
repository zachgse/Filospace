<div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Cart</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <table class="table">
            <thead class="text-white">
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Price</th>
                </tr>
            </thead>
            <tbody class="text-white">
                <tr>
                    @forelse($cart as $index => $value)
                    <tr>
                        <td>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </td>

                        <td>
                            <div class="mb5">{{ $value->product->title }}</div>
                        </td>

                        <td>
                            <div class="mb5">{{ $value->product->category }}</div>
                        </td>


                        <td>
                            <div class="mb5">{{$value->product->price}}</div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6">
                            <p class="text-center">No items in cart yet.</p>
                        </td>
                    </tr>
                    @endforelse
                </tr>
            </tbody>
        </table>
    </div>
</div>