
<?php
echo form_open(base_url('admin/idv/proses'));
?>
<p class="btn-group">
  <a href="<?php echo base_url('admin/idv/tambah') ?>" class="btn btn-success btn-lg">
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
    <th >Nama</th>
    <th >Jabatan</th>
    <th >Email</th>
    <th >No Handphone</th>
    <th >Alamat</th>
    <th width="10%">&nbsp;</th>
  </tr>
</thead>
<tbody>
  <?php foreach($daftar as $row) { ?>
  <tr>
 <td>
      <div class="mailbox-star text-center"><div class="text-center">
        <input type="checkbox" class="icheckbox_flat-blue " name="id_idv[]" value="<?php echo $row['id_idv'] ?>">
        <span class="checkmark"></span>
      </div>
    </td>
    <td><?php echo $row['nama_idv'] ?></td>
    <td><?php echo $row['jabatan_idv'] ?></td>
    <td><?php echo $row['email_idv'] ?></td>
    <td><?php echo $row['no_idv'] ?></td>
    <td><?php echo $row['alamat_idv'] ?></td>
    <td>
      <div class="btn-group">
        <a href="<?php echo base_url() ?>admin/idv/edit/<?php echo $row['id_idv'] ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a> 
        <a href="<?php echo base_url() ?>admin/idv/delete/<?php echo $row['id_idv'] ?>" class="btn btn-danger btn-xs" onclick="confirmation(event)"><i class="fa fa-trash-o"></i></a> 
       </div> 
    </td>
  </tr>
  <?php } ?>
</tbody>
</table>
</div>
<?php echo form_close(); ?>
