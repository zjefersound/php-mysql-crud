<?php
function stringToNumber($value)
{
  $formatado = explode(',', $value);
  $formatado = implode('.', $formatado);
  return $formatado;
}
function numberToString($value)
{
  return number_format($value, 2, ",", ".");
}
function formatarData($date)
{
  date_default_timezone_set('America/Sao_Paulo');
  $dateTime = new DateTime($date);
  return $dateTime->format('jS \o\f F Y ');
}
?>