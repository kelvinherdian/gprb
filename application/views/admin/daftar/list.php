
<?php
echo form_open(base_url('admin/Daftar/proses'));
?>
<p class="btn-group">
  <a href="<?php echo base_url('admin/Daftar/tambah') ?>" class="btn btn-success btn-lg">
  <i class="fa fa-plus"></i> Tambah Daftar</a>

  <button class="btn btn-danger" type="submit" name="hapus" onClick="check();" >
      <i class="fa fa-trash-o"></i> Hapus
    </button> 

</p>


<div class="table-responsive mailbox-messages">
<table id="example1" class="display table table-bordered" cellspacing="0" width="100%">
<thead>
<tr class="bg-info">
    <th width="5%">
        <div class="mailbox-controls">
            <!-- Check all button -->
            <button type="button" class="btn btn-default btn-xs checkbox-toggle"><i class="fa fa-square-o"></i>
            </button>
        </div>
    </th>
    <th >Lembaga</th>
    <th >Nama</th>
    <th >Alamat</th>
    <th >Telephon</th>
    <th >Email</th>
    <th >Website</th>
    <th >Twitter</th>
    <th >Instagram</th>
    <th >Tanggal Daftar</th>
    <th >Narahubung Nama</th>
    <th width="10%">&nbsp;</th>
  </tr>
</thead>
<tbody>
  <?php foreach($daftar as $row) { ?>
  <tr>
 <td>
      <div class="mailbox-star text-center"><div class="text-center">
        <input type="checkbox" class="icheckbox_flat-blue " name="id_daftar[]" value="<?php echo $row['id_daftar'] ?>">
        <span class="checkmark"></span>
      </div>
    </td>
    <td><?php echo $row['lembaga'] ?></td>
    <td><?php echo $row['daftar_nama'] ?></td>
    <td><?php echo $row['daftar_alamat'] ?></td>
    <td><?php echo $row['daftar_telepon'] ?></td>
    <td><?php echo $row['daftar_email'] ?></td>
    <td><?php echo $row['daftar_website'] ?></td>
    <td><?php echo $row['daftar_twitter'] ?></td>
    <td><?php echo $row['daftar_instagram'] ?></td>
    <td><?php echo date('d F Y', strtotime($row['daftar_tanggal'])) ?></td>
    <td><?php echo $row['daftar_narahubung_nama'] ?></td>
    <td>
      <div class="btn-group">
        <a href="<?php echo base_url() ?>admin/daftar/edit/<?php echo $row['id_daftar'] ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a> 
        <a href="<?php echo base_url() ?>admin/daftar/delete/<?php echo $row['id_daftar'] ?>" class="btn btn-danger btn-xs" onclick="confirmation(event)"><i class="fa fa-trash-o"></i></a> 
       </div> 
    </td>
  </tr>
  <?php } ?>
</tbody>
</table>
</div>
<?php echo form_close(); ?>
