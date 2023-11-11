<?php

class Modal{
    function ButtonModal($value, $dataDismiss, $cls, $btn){
        return "<".$btn." class='".$cls."' data-toggle='modal' data-target='#".$dataDismiss."'>".$value."</".$btn.">";
    }

    function ViewModal($title, $value, $btnHuy, $btnOK, $id, $more) {
        return "<div class='modal fade' id='".$id."' tabindex='-1'
                aria-hidden='true' ".$more.">
                <div class='modal-dialog'>
                    <div class='modal-content'>
                        <div class='modal-header'>
                            <h5 class='modal-title' id='exampleModalLabel'>".$title."</h5>
                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                            </button>
                        </div>
                        <div class='modal-body'>".$value."
                        </div>
                        <div class='modal-footer'>
                            <button type='button' class='btn btn-secondary' data-dismiss='modal'>".$btnHuy."</button>
                            <button type='button' class='btn btn-primary'>".$btnOK."</button>
                        </div>
                    </div>
                </div>
            </div>";
    }
}

?>