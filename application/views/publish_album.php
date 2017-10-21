<div class="col-md-12">
    <div class="card">
        <div class="header">
            <h4 class="title">Dodaj nowy album</h4>
        </div>
        <div class="content">
            <form>
                <div class="row">

                    <div class="col-md-10">
                        <div class="form-group">
                            <label>Nazwa albumu</label>
                            <input type="text" class="form-control" placeholder="Nazwa albumu" value="Mój album">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Cena (zł)</label>
                            <input type="number" class="form-control" placeholder="Cena" ng-model="howCost" min="30">
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Zespół</label>
                            <input type="text" class="form-control" placeholder="Zespół" value="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Gatunki (oddziel przecinkami)</label>
                            <input type="text" class="form-control" placeholder="Gatunki" value="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Opis albumu</label>
                            <textarea rows="5" class="form-control" placeholder="Opis albumu" value="Mike"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group text-center">
                            <label>Wybierz formę</label>
                            <br>
                            <label class="radio-inline">
                                <input type="radio" ng-model="formOfPublish" value="audioCD" name="optradio" checked="checked">Audio CD</label>
                            <label class="radio-inline">
                                <input type="radio" ng-model="formOfPublish" value="CD" name="optradio">CD</label>
                            <label class="radio-inline">
                                <input type="radio" ng-model="formOfPublish" value="DVD" name="optradio">DVD</label>
                        </div>
                    </div>
                </div>

                <div class="row" ng-hide="formOfPublish != 'audioCD'">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Utwory</h4>
                                <p class="category">Lista utworów na albumie</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>Lp.</th>
                                        <th>Nazwa</th>
                                        <th></th>
                                    </thead>
                                    <tbody class="sortable-list">
                                        <tr class="songs-list">
                                            <td class="idTd">1</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Nazwa utworu</label>
                                                            <input type="text" class="form-control" placeholder="Nazwa utworu" value="Utwór">
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="clickToRemove">
                                                <a href="#">
                                                    <img src="https://www.shareicon.net/data/2015/11/10/160511_delete_256x256.png" alt="(x)" width="15px" height="15px">
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="songs-list" style="display:none" id="templateToClone">
                                            <td class="idTd"></td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Nazwa utworu</label>
                                                            <input type="text" class="form-control" placeholder="Nazwa utworu" value="Utwór">
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="clickToRemove">
                                                <a href="#">
                                                    <img src="https://www.shareicon.net/data/2015/11/10/160511_delete_256x256.png" alt="(x)" width="15px" height="15px">
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="row">
                                    <div class="content text-center">
                                        <button type="button" class="btn btn-info btn-fill" id="addSong">Dodaj</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-12" class="text-center">

                        <div class="form-group">
                            <p ng-hide="formOfPublish != 'audioCD'">Prześlij spakowaną paczkę, zawierającą wszystkie utwory, które mają znaleźć się na albumie, a także grafiki na okładkę płyt (wzory: <a href="#">CD</a> i <a href="#">DVD</a>) i samą płyte (wzory: <a href="#">CD</a>).</p>
                            <p ng-hide="formOfPublish == 'audioCD'">Prześlij spakowaną paczkę, zawierającą materiał jaki ma znaleźć się na płycie, a także grafiki na okładkę płyt (wzory: <a href="#">CD</a> i <a href="#">DVD</a>) i samą płyte (wzory: <a href="#">CD</a>).</p>
							<span class="btn btn-default btn-file">
								<input type="file" class="form-control-file" id="fileInput" aria-describedby="fileHelp">
								<a href="#" id="fileUpload">Upload</a>
								<img src="https://m.popkey.co/163fce/Llgbv_s-200x150.gif" id="loadingmessage" style="display:none">
							</span>
							<small id="divFileNameToShow" class="form-text text-muted" style="display: none">Plik: <span id="fileNameToShow"></span> został wysłany</small>
							<hr>
                            <small id="fileHelp" class="form-text text-muted">Wysyłając plik, akceptujesz <a href="#">regulaminu</a></small>
                        </div>


                    </div>

                </div>

                <button type="submit" class="btn btn-info btn-fill pull-right">Dodaj</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>

<script>
    var app = angular.module('myApp', []);
    app.controller('myCtrl', function($scope) {
        $scope.formOfPublish = "audioCD";
        $scope.howCost = 30;
    });

    function sortTable() {
        var i = 1;
        $(".songs-list").each(function() {
            if ($(this).attr("id") != "templateToClone") {
                $(this).find(".idTd").html(i);
                i++;
            }
        });
    }

    $('.sortable-list').sortable({
        connectWith: '.sortable-list',
        update: function(event, ui) {
            sortTable();
        }
    });

    $(document).on('click', '.clickToRemove', function() {
        $(this).parent("tr").remove();
        sortTable();
    });

    $("#addSong").click(function() {
        var template = $("#templateToClone").clone();
        template.attr("id", "");
        template.attr('style', '');
        $("#templateToClone").before(template);
        sortTable();
    });
	
            $(document).ready(function (e) {
                $('#fileUpload').on('click', function () {
                    var file_data = $('#fileInput').prop('files')[0];
                    var form_data = new FormData();
                    form_data.append('file', file_data);
					$('#loadingmessage').show();
					$('#fileUpload').hide();
                    $.ajax({
                        url: '/codeigniter/index.php/ajaxupload/upload_file', // point to server-side controller method
                        dataType: 'text', // what to expect back from the server
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: form_data,
                        type: 'post',
                        success: function (response) {
							var json = JSON.parse(response);
							$('#loadingmessage').hide();
							$('#fileUpload').show();
							if(json.succes==1){
								$('#fileNameToShow').html(json.fileToShow);
								$('#divFileNameToShow').show();
							}

                        },
                        error: function (response) {
                        }
                    });
                });
            });
	
</script>