<?phpif ($hasil)	$row = $hasil->row();?><script>$(function() {	$('#btn_delete').click(function() {			$('#j_action').val('delete_client');;		$('#formSubmit').submit();	});	});</script><h2>Manajemen Klien</h2><h3>Hapus Klien</h3><br/><form id="formSubmit" method="post" action=""><table width="100%" class="table-form">	<tr>		<th colspan="3"><h3>APAKAH ANDA INGIN MENGHAPUS KLIEN INI ??</h3></th>	</tr>	<tr>		<th width="23%">Nama Klien</th>		<th width="7%">:</th>		<td><?=@$row->nama?></td>	</tr>		<tr>		<th width="23%">Kode Klien</th>		<th width="7%">:</th>		<td><?=@$row->kode?></td>	</tr>	<tr>		<th>Alamat</th>		<th>:</th>		<td><?=@$row->alamat?></td>	</tr>				<tr>		<td colspan="2" align="left"></td>		<td class="table-common-links">			<input type="hidden" id="j_action" name="j_action" value=""><input type="hidden" name="id_client" value="<?=@$row->id_client?>"><a href="javascript: void(0)" id="btn_delete">Hapus</a><a href="<?=base_url();?>klien">Kembali</a>		</td>	</tr></table></form>