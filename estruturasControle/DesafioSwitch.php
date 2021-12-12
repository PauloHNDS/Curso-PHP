<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="number" name="param" id="param">
    <select name="conversao" id="conversao">
        <option value="KM_MILHA">KM > MILHA</option>
        <option value="MILHA_KM">MILHA > KM</option>
        <option value="METRO_KM">METRO > KM</option>
        <option value="KM_METRO">KM > METRO</option>
        <option value="CELSIUS-FAHRENHEIT">CELSIUS > FAHRENHEIT</option>
        <option value="FAHRENHEIT-CELSIUS">FAHRENHEIT > CELSIUS</option>
    </select>
    <button>Calcular</button>
</form>
<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php 

    const KM_MILHA = 0.61;
    const METRO_KM = 1000;
    const CELSIUS_FAHRENHEIT = 1.8;
    $param = $_POST['param'] ?? 0;


    switch ($_POST['conversao'] ?? "") {
        case 'KM_MILHA':
            $distancia = $param * KM_MILHA;
            $mensagem = "{$param} KM = {$distancia} MILHAS";
        break;

        case 'MILHA_KM':
            $distancia = $param / KM_MILHA;
            $mensagem = "{$param} MILHAS = {$distancia} KM";
        break;

        case 'METRO_KM':
            $distancia = $param / METRO_KM;
            $mensagem = "{$param} METROS = {$distancia} KM";
        break;

        case 'KM_METRO':
            $distancia = $param * METRO_KM;
            $mensagem = "{$param} KM = {$distancia} METROS";
        break;

        case 'CELSIUS-FAHRENHEIT':
            $temperatura = ($param * CELSIUS_FAHRENHEIT) + 32;
            $mensagem = "{$param}°C = {$temperatura} °F";
        break;

        case 'FAHRENHEIT-CELSIUS':
            $temperatura = ($param - 32 ) / CELSIUS_FAHRENHEIT;
            $mensagem = "{$param}°F = {$temperatura} °C";
        break;
            
        default:
            $mensagem = "";
        break;
    }

    echo($mensagem);

        
?>