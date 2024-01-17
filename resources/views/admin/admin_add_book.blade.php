<!-- Main Content -->
@extends('admin.admin_header')

@section('admin_header_style')
    /* dev_phyoe */
    .edit {
    background: silver;
    }

    .edit_book {
    font-family: 'Courier New', Courier, monospace;
    }

    .jum {
    background: slategrey;
    }
@endsection

@section('admin_header')
    <div class="col-md-9">

        <!-- dev_phyoe start -->
        <h3 class="edit_book mt-4">Add Book</h3>


            <form action="{{route('admin_add_book_function')}}" method="post">
                @csrf
                <!-- first section start -->
                <section class="container-fluid">
                <div class="row container-fluid container">

                    <div class="col-md-2 edit_book mt-4">
                        <h6 class="mt-4">Book ID</h5>
                            <h6 class="mt-4">Book Name</h5>
                                <h6 class="mt-4">Auther</h5>
                                    <h6 class="mt-4">Categories</h5>
                                        <h6 class="mt-4">Release Date</h5>
                                            <h6 class="mt-4">Price</h5>
                                                <h6 class="mt-4">Quantity</h5>
                    </div>
                    <div class="col-md-3 edit_book mt-4">
                        <input type="text" name="bookId" class="form-control form-control-sm mt-3 border" placeholder="input">
                        <input type="text" name="bookName" class="form-control form-control-sm mt-2" placeholder="input">
                        <input type="text" name="Auther" class="form-control form-control-sm mt-3" placeholder="input">
                        <input type="text" name="category" class="form-control form-control-sm mt-3" placeholder="input">
                        <input type="date" name="releaseDate" class="form-control form-control-sm mt-3" placeholder="input">
                        <input type="text" name="price" class="form-control form-control-sm mt-2" placeholder="input">
                        <input type="text" name="quantity" class="form-control form-control-sm mt-2" placeholder="input">
                    </div>

                    <div class="col-md-6">
                        <h4 class="edit_book" style="color: coral;">Add Book Cover</h4>
                        <div class="card" style="width:500px ; height:500px;">
                            <img class="edit_book" src="" alt="Book Cover">
                        </div>
                        <input accept="image/*" type="file" class="btn btn-outline-muted edit_book mt-2 border" name="bookImage"
                            id="">
                    </div>
                </div>
            </section>
            <!-- first section end -->

            <!-- second section start -->
        <section class="container-fluid container">
            <div class="jum mt-4 rounded p-2 text-white">
                <div class="row">
                    <div class="col-md-2 offset-4">
                        <button type="submit" class="btn btn-success edit_book">Save</button>
                    </div>
                    <!--div class="col-md-2 offset-1">
                                    <button class="btn btn-info edit_book">Exit</button>
                                </div-->
                    <div class="col-md-2 offset-1">
                        <button type="button" class="btn btn-danger edit_book">Delete</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- second section end -->
            </form>





        <!-- third section start -->

        <!-- third section end -->

        <!-- dev_phyoe end -->

        {{-- <h6 class="text-muted offset-10 mt-4" style="font-family:Harrington;"> dev_phyoewai &copy; </h6> --}}

    </div>
@endsection
