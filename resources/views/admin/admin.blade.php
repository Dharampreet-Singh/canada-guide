@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="container bg-white p-5 m-2 rounded text-xl text-blue-500">
            Dashboard
        </div>
        <div class="flex">
            <div class="" style="width: 50%; height:50%">
                <canvas id="groceryStores" height="450" width="600"></canvas>
            </div>
            <div class="" style="width: 100%;">
                <canvas id="blogs" height="450" width="600"></canvas>
            </div>
            <div class="">
                <canvas id="places"></canvas>
            </div>
            <div class="">
                <canvas id="housing"></canvas>
            </div>
        </div>
    </div>


    <script>
        const groceryStoresData = <?php echo $groceryStoreData; ?>;
        const groceryStoreCities = <?php echo $groceryStoreCities; ?>;
        const blogsUsers = <?php echo $blogsUsers; ?>;
        const blogsCount = <?php echo $blogsCount; ?>;

        console.log("grocery Data", groceryStoresData, groceryStoreCities);

        const ctxGroceryStore = document.getElementById('groceryStores');
        // ctxGroceryStore.width = 350 // 350px
        // ctxGroceryStore.height = 200 // 200px
        // const ctxHousing = document.getElementById('housing');
        // const ctxPlaces = document.getElementById('places');
        const ctxBlogs = document.getElementById('blogs');

        new Chart(ctxGroceryStore, {
            type: 'doughnut',
            title: "Grocery Stores",
            data: {
                labels: groceryStoreCities,
                datasets: [{
                    label: '# of Stores',
                    data: groceryStoresData,
                    borderWidth: 1
                }]
            },
            width: 500,
            height: 300,
            options: {
                responsive: false,
                plugins: {
                    title: {
                        display: true,
                        text: 'StateWise Grocery Stores'
                    }
                },
                tooltips: {
                    enabled: false
                },
                hover: {
                    mode: null
                },

            }
        });

        new Chart(ctxBlogs, {
            type: 'bar',
            data: {
                labels: blogsUsers,
                datasets: [{
                    label: '# of Blogs Per User',
                    data: blogsCount,
                    borderWidth: 1
                }]
            },
            width: 500,
            height: 300,
            options: {
                responsive: false,
                plugins: {
                    title: {
                        display: true,
                        text: 'Blogs Per User'
                    }
                }

            }
        });
    </script>
@endsection
