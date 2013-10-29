// Função que indica se os votos são negativos

funcion votos_positivos (n)
{
  document.getElementById("pos");
  var resultado = pos.votos.value;
  var votos = new Array ();
  for (var i=0; i<n; i++)
  {
    if (votos[i] < 0)
    {
      resultado = resultado + 1;
    }
  }
  var r = resultado;
  pos.votos.value = r;
}