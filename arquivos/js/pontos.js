
  $(document).ready(function(){
    diferenca();
    $("#data").click(function() {
      diferenca();
    });
    $("#entrada").click(function() {
      diferenca();
    });
    $("#saida").click(function() {
      diferenca();
    });
    $("#btn_salvar").click(function() {
      diferenca();
    });
    
    




  });

  function diferenca(){
    //$("#")
    var entrada = $("#entrada").val();
    var saida = $("#saida").val();
    var jornada = '';
    var data = $("#data").val();
    var dia_semana = durante_semana(data);
    if(dia_semana){
        jornada = $("#jornada").val();
    }else{
      jornada = 0;
     
    }

    var diferenca_entrada_saida = horas_to_segundos(saida) - horas_to_segundos(entrada);
    var horas_diferenca_jornada = horas_to_segundos(jornada) - diferenca_entrada_saida;

    var horas_mais = 0;
    var horas_menos = 0;

    $("#diferenca_horas").val(horas_diferenca_jornada*(-1));
    if(horas_diferenca_jornada > 0){
      horas_menos = horas_diferenca_jornada;
    }else{
      horas_mais = horas_diferenca_jornada*(-1);
    }

    var txt = ""

    +"Data :"+data+"<br>"
    +"horas entrada: "+entrada+"<br>"
    +"Segundos entrada : "+horas_to_segundos(entrada)+"<br>"
    +"<br>"
    +"horas saida: "+saida+"<br>"
    +"segundos saida : "+horas_to_segundos(saida)+"<br>"
    +"<br>"
    +"jornada: "+jornada+"<br>"
    +"Segundos jornada: "+horas_to_segundos(jornada)+"<br>"
    +"<br>"
    +"Diferença entreda e saída : "+diferenca_entrada_saida+"<br>"
    +"<br>"
    +"Segundos a mais: "+horas_mais+"<br>"
    +"Horas a mais: "+segundos_to_horas(horas_mais)+"<br>"
    +"<br>"
    +"Segundos a menos : "+horas_menos+"<br>"
    +"Horas a menos : "+segundos_to_horas(horas_menos)+"<br>"
    //+"Segundos para horas : "+segundos_to_horas(horas_mais)+"<br>"
    +"<br>"
    +"Durante de semana: "+dia_semana+"<br>"
    +"";

    $("#alert_teste").html(txt);

    $("#diferenca_mais").val(segundos_to_horas(horas_mais));
    $("#diferenca_menos").val(segundos_to_horas(horas_menos));



  }

  function durante_semana(data) {
    
    var data = new Date(data);
    var dia;
    dia = data.getDay();
    //return dia;
    if(dia == 5 || dia == 6){
      return false;
    }else{
      return true;
    }
    // body...
  }
  function horas_to_segundos(horas){

    if(horas == 0){
      return 0;
    }

    var horas_segundos = horas.substr(0,2);
    var minutos_segundos = horas.substr(3,2);

    return horas_segundos*3600+minutos_segundos*60;

  }

  function segundos_to_horas(segundos) {
    
    //segundos = 4080;
    horas = segundos/3600;
    horas = parseInt(horas);
    
    if(horas >= 1 && horas < 10){
      horas = "0"+horas;
    }else if(horas < 1){
      horas = "00";
    }
    /**/
    minutos = segundos%3600;
    minutos = minutos/60;

    minutos = parseInt(minutos);
    if(minutos < 10){
      minutos = "0"+minutos;
    }


    horas = horas+":"+minutos;

    return horas;
  }
