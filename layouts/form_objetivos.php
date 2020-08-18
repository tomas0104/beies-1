<div class="form-element-area">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <form id="form_objetivo"> 
                <div class="form-element-list">                  
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="nk-int-mk sl-dp-mn mg-t-30">
                                <h2>1. Seleccione la experiencia</h2>
                            </div>
                            <input id="IDexp_objetivo" name="Objetivo_IDexp" readonly="" hidden=""/>
                            <div class="form-group">
                                
                                <select  name="EXP_ID" class="form-control" id="selectexp_objetivo" >
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <button class="btn  notika-btn-info btn-lg waves-effect float-right btn-sm" type="button" id="btn_consultarReg" style="background: #9945b0; color: white" onclick="GetID_Objetivo()">Consultar registro </button>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="form-example-int form-example-st">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                <label class="form-check-label" for="inlineRadio1">Nuevo registro</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="form-example-int form-example-st">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option1">
                                                <label class="form-check-label" for="inlineRadio2">Actualizar registro</label>
                                            </div>
                                        </div>
                                    </div>   
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr style="border-top: 2px solid purple;">
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-element-list mg-t-30">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group ic-cmp-int">
                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                            <h2>1. Objetivos </h2>
                                        </div>
                                        <div>
                                            <table class="table table-bordered table-hover table-striped">
                                                <thead>
                                                    <tr style="background: #9945b0">
                                                        <th class="text-center" style="color: white; width: 10rem;">Objetivos</th>
                                                        <th class="text-center" style="color: white; width: 30rem;">Descripción</th>  
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>General</td>
                                                        <td><textarea id="objetivo_general" name='obj_general'  class="form-control"></textarea></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Especifico 1</td>
                                                        <td>
                                                            <textarea id="especifico_1" name='objetivo_especifico1'  class="form-control" maxlength="255"></textarea>
                                                        </td> 
                                                    </tr>
                                                    </tr>
                                                    <tr>
                                                        <td>Especifico 2</td>
                                                        <td>
                                                            <textarea id="especifico_2" name='objetivo_especifico2'   class="form-control"></textarea>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Especifico 3</td>
                                                        <td>
                                                            <textarea id="especifico_3" name='objetivo_especifico3'  class="form-control"></textarea>
                                                        </td>                 
                                                    </tr>
                                                    <tr>
                                                        <td>Especifico 4</td>
                                                        <td>
                                                            <textarea id="especifico_4" name='objetivo_especifico4'  class="form-control"></textarea>
                                                        </td>                 
                                                    </tr>
                                                </tbody>
                                            </table>                                     
                                        </div>                                              
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="nk-int-mk sl-dp-mn mg-t-30">
                                        <h2>2. Descripcion del problema</h2>
                                    </div>
                                    <div class="form-group ic-cmp-int">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon"></i>
                                        </div>
                                        <div>
                                            <textarea id="descripcion_problema" name="desc_problema" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="nk-int-mk sl-dp-mn mg-t-30">
                                        <h2>3. ¿Cómo la experiencia soluciona el problema?</h2>
                                    </div>
                                    <div class="form-group ic-cmp-int">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon"></i>
                                        </div>
                                        <div>
                                            <textarea id="solucion_problema" name="sol_problema" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="nk-int-mk sl-dp-mn mg-t-30">
                                        <h2>4. Palabras claves</h2>
                                    </div>
                                    <div class="form-group ic-cmp-int">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon"></i>
                                        </div>
                                        <div
                                            >
                                            <textarea id="keywords" name="palabras_claves" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <hr style="border-top: 2px solid purple;">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                    <button class="btn  notika-btn-info btn-lg waves-effect float-right btn-sm" type="button" id="registrar_objetivo" onclick="Registrar_Objetivo()" style="background: #9945b0; color: white">Registrar Datos</button> 
                                    <button class="btn  notika-btn-danger btn-lg waves-effect float-right btn-sm" type="button" id="actualizar_objetivo" onclick="Actualizar_Objetivo()" style="background: #FFC107; color: white">Actualizar Registro</button>                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>                    
</form>
</div>
