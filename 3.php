<?php

function cetak_gambar($jumlah__)
{
	for ($i = 1; $i <= $jumlah__; $i++)  
    {  
        for ($j = 1; $j <= $jumlah__; $j++)  
        {  
        	if ($j == 1 || $j == $jumlah__ || $i == ($jumlah__/2)+0.5)
        	{
        		echo "*&nbsp;";
        	}
        	else
        	{
        		echo "=&nbsp;";
        	}
        }  
        echo "<br>"; 
    }  
}
cetak_gambar(5);
?>