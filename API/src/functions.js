import Swal from "sweetalert2";
import withReactContent from "sweetalert2-react-content";

export function show_alerta(mensaje,icono,f=''){
    onFocus(f);
    const m = withReactContent(Swal);

    m.fire({
     title:mensaje,
     icon:icono   
    });

}

function onFocus(f){
    if (f!==''){
        document.getElementById(f).focus();
    }
}