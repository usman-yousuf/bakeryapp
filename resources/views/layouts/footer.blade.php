        </div>
	</div>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==" crossorigin="anonymous"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>

    <!-- select 2 library -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


    <!-- custom js  -->
    <script src="{{ asset('assets/js/javascript.js') }}"></script>

    <script type="text/javascript">

        $( document ).ready(function() {
          let endpoint = 'http://localhost/bakeryapp'
            
            //delete_user
            $(`#delete_user`).click( function(){
                let apiKey = '/api/auth/delete_user'
                id = $(`#delete_user`).data('id') 
                console.log(id);

                    $.ajax({
                        type: 'POST',
                        url: endpoint + apiKey,
                        contentType: "application/json",
                        // dataType: 'json',
                        data : {ids: id},
                        // method: 'POST',
                        success: function(result){
                            console.log('result');
                        }
                    });
            });

            $(`#add_product`).click( function(){
                let apiKey = '/api/auth/add_product'
                id = $(`#product_name-d`).value()
                debugger;
                console.log('saddsa');
                alert(id);


            });
        });

    </script>
</body>

</html>
