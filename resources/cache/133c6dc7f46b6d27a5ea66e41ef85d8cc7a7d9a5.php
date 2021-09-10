<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS start -->
    <link rel="stylesheet" href="public/assets/css/tailwind.css">
    <!-- CSS end -->

    <title>FS-CODE!</title>
  </head>
  <body class="w-full min-h-screen bg-gray-200">
    <div class="container min-h-screen mx-auto px-20 flex justify-center items-center">
        <div class="w-1/2 rounded shadow bg-white flex flex-col py-10">
            <div class="text-center text-3xl font-bold text-gray-600 mb-10"><h1>Welcome!!!</h1></div>
            <div class="px-8 flex justify-center">
                <select autofocus onchange="getPluginForm()" class="w-1/2  px-4 outline-none cursor-pointer border-gray-600 border-2 rounded h-12 text-xl text-gray-600 font-semibold focus:border-blue-600 transition-all hover:border-blue-600" name="plugin" id="plugin">
                    <option value="none">Select the plugin</option>
                    <option value="email">Email</option>
                    <option value="whatsapp">Whatsapp</option>
                    <option value="telegram">Telegram</option>
                </select>
            </div>
            <div id="formhere"></div>
            <div id="result" class="w-3/4 mx-auto mt-10 rounded bg-yellow-500 text-white px-8 flex flex-col space-y-4"></div>
        </div>
    </div>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="public/assets/js/serialize.js"></script>

    <script type="text/javascript">
        let plugin = document.getElementById('plugin');

        const getPluginForm = () => {
            axios.post('form', {
                plugin: plugin.value
            })
            .then(function(res) {
               let formhere = document.getElementById('formhere');
               formhere.innerHTML = res.data;
            })
            .catch(function(err) {
                console.log(err);
            })
        }

        $(document).on('submit', '#form', function(e) {
            e.preventDefault();
            const data = $('#form').serializeJSON();
            axios.post('sendmessage', {
                data: data,
                plugin: plugin.value
            })
            .then(function(res) {
                let result = document.getElementById('result');
                result.innerHTML = '';
                result.insertAdjacentHTML('beforeend', "<p class='w-full text-2xl text-center text-gray-700 font-semibold my-8'>Serverdən gələn cavab:</p>");
                for (const property in res.data) {
                    let div = "<div class='py-2 flex justify-between'><span class='font-semibold'>"+property+":</span><span class='underline'>"+res.data[property]+"</div>";
                    result.insertAdjacentHTML('beforeend', div);
                }

            })
            .catch(function(err) {
                console.log(err);
            })
        });
    </script>
  </body>
</html><?php /**PATH C:\xampp\htdocs\fscode\resources\views/home.blade.php ENDPATH**/ ?>