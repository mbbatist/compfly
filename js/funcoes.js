$(function(){
	function Adicionar(){
		$("#tblCadastro tbody").append(
			"<tr>"+
			"<td><input type='text' style='width:50px;'></td>"+
			"<td><input type='text' style='width:150px;'></td>"+
			"<td><input type='text' style='width:150px;'></td>"+
                        "<td><input type='text' style='width:150px;'></td>"+
                        "<td><input type='text' style='width:150px;'></td>"+
                        "<td><input type='text' style='width:150px;'></td>"+
                        "<td><input type='text' style='width:150px;'></td>"+
                        "<td><img src='img/disk.png' class='btnSalvar'><img src='img/delete.png' class='btnExcluir'/></td>"+
                        "</tr>");

		$(".btnSalvar").bind("click", Salvar);     
		$(".btnExcluir").bind("click", Excluir);
	};

	function Salvar(){
		var par = $(this).parent().parent(); //tr
		var par = $(this).parent().parent(); //tr
                var tdhrs = par.children("td:nth-child(1)");
                var tdseg = par.children("td:nth-child(2)");
		var tdter = par.children("td:nth-child(3)");
		var tdqua = par.children("td:nth-child(4)");
                var tdqui = par.children("td:nth-child(5)");
                var tdsex = par.children("td:nth-child(6)");
                var tdsab = par.children("td:nth-child(7)");
		var tdBotoes = par.children("td:nth-child(8)");

                tdhrs.html(tdhrs.children("input[type=text]").val());
                tdseg.html(tdseg.children("input[type=text]").val());
		tdter.html(tdter.children("input[type=text]").val());
		tdqua.html(tdqua.children("input[type=text]").val());
                tdqui.html(tdqui.children("input[type=text]").val());
                tdsex.html(tdsex.children("input[type=text]").val());
                tdsab.html(tdsab.children("input[type=text]").val());
		tdBotoes.html("<img src='img/delete.png'class='btnExcluir'/><img src='img/pencil.png' class='btnEditar'/>");

		$(".btnEditar").bind("click", Editar);
		$(".btnExcluir").bind("click", Excluir);
	};

	function Editar(){
		var par = $(this).parent().parent(); //tr
                var tdhrs = par.children("td:nth-child(1)");
                var tdseg = par.children("td:nth-child(2)");
		var tdter = par.children("td:nth-child(3)");
		var tdqua = par.children("td:nth-child(4)");
                var tdqui = par.children("td:nth-child(5)");
                var tdsex = par.children("td:nth-child(6)");
                var tdsab = par.children("td:nth-child(7)");
		var tdBotoes = par.children("td:nth-child(8)");

                tdhrs.html("<input type='text' style='width:50px; id='txthrs' value='"+tdhrs.html()+"'/>");
		tdseg.html("<input type='text' style='width:150px; id='txtseg' value='"+tdseg.html()+"'/>");
		tdter.html("<input type='text' style='width:150px; id='txtter' value='"+tdter.html()+"'/>");
		tdqua.html("<input type='text' style='width:150px; id='txtqua' value='"+tdqua.html()+"'/>");
                tdqui.html("<input type='text' style='width:150px; id='txtqui' value='"+tdqui.html()+"'/>");
                tdsex.html("<input type='text' style='width:150px; id='txtsex' value='"+tdsex.html()+"'/>");
                tdsab.html("<input type='text' style='width:150px; id='txtsab' value='"+tdsab.html()+"'/>");
		tdBotoes.html("<img src='img/disk.png' class='btnSalvar'/>");

		$(".btnSalvar").bind("click", Salvar);
		$(".btnEditar").bind("click", Editar);
		$(".btnExcluir").bind("click", Excluir);
	};

	function Excluir(){
	    var par = $(this).parent().parent(); //tr
	    par.remove();
	};

	$(".btnEditar").bind("click", Editar);
	$(".btnExcluir").bind("click", Excluir);
	$("#btnAdicionar").bind("click", Adicionar); 
});
