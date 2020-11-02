<script src="http://localhost/bimaui/assets/ckeditor/ckeditor.js"></script>

<!-- validasi -->


<?php echo validation_errors(); ?>
<?php echo form_open_multipart(base_url('admin/daftar/tambah')) ?>

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="table">Informasi Lembaga / Organisasi
  <tr valign="baseline">
    <td width="22%" align="right" nowrap>Lembaga / Organisasi</td>
    <td width="78%">
      <input type="text" name="lembaga" class="form-control" value="<?php echo set_value('lembaga') ?>" placeholder="Lembaga / Organisasi" size="50">
    </td>
  </tr>
  <tr valign="baseline">
    <td nowrap align="right">Nama</td>
    <td><input type="text" class="form-control" name="daftar_nama" value="<?php echo set_value('daftar_nama') ?>" placeholder="Nama" size="40"></td>
  </tr>
  <tr valign="baseline">
    <td nowrap align="right">Alamat</td>
    <td><input type="text" class="form-control" name="daftar_alamat" value="<?php echo set_value('daftar_alamat') ?>" placeholder="Alamat" size="40"></td>
  </tr>
  <tr valign="baseline">
    <td nowrap align="right">Telepon</td>
    <td><input type="text" class="form-control" name="daftar_telepon" value="<?php echo set_value('daftar_telepon') ?>" placeholder="Telepon" size="40"></td>
  </tr>
  <tr valign="baseline">
    <td nowrap align="right">Email</td>
    <td><input type="email" class="form-control" name="daftar_email" value="<?php echo set_value('daftar_email') ?>" placeholder="Email" size="40"></td>
  </tr>
  <tr valign="baseline">
    <td nowrap align="right">Website</td>
    <td><input type="text" class="form-control" name="daftar_website" value="<?php echo set_value('daftar_website') ?>" placeholder="Website" size="40"></td>
  </tr>
  <tr valign="baseline">
    <td nowrap align="right">Twitter</td>
    <td><input type="text" class="form-control" name="daftar_twitter" value="<?php echo set_value('daftar_twitter') ?>" placeholder="Twitter" size="40"></td>
  </tr>
  <tr valign="baseline">
    <td nowrap align="right">Instagram</td>
    <td><input type="text" class="form-control" name="daftar_instagram" value="<?php echo set_value('daftar_instagram') ?>" placeholder="Instagram" size="40"></td>
  </tr>

  <td>Narahubung</td>
  <tr valign="baseline">
    <td nowrap align="right">Nama</td>
    <td><input type="text" class="form-control" name="daftar_narahubung_nama" value="<?php echo set_value('daftar_narahubung_nama') ?>" placeholder="Nama" size="40"></td>
  </tr>
  <tr valign="baseline">
    <td nowrap align="right">Jabatan</td>
    <td><input type="text" class="form-control" name="daftar_narahubung_jabatan" value="<?php echo set_value('daftar_narahubung_jabatan') ?>" placeholder="Jabatan" size="40"></td>
  </tr>
  <tr valign="baseline">
    <td nowrap align="right">Telephone</td>
    <td><input type="text" class="form-control" name="daftar_narahubung_telepon" value="<?php echo set_value('daftar_narahubung_telepon') ?>" placeholder="Telephone" size="40"></td>
  </tr>
  <tr valign="baseline">
    <td nowrap align="right">Email</td>
    <td><input type="email" class="form-control" name="daftar_narahubung_email" value="<?php echo set_value('daftar_narahubung_email') ?>" placeholder="Email" size="40"></td>
  </tr>
  <tr valign="baseline">
    <td nowrap align="right">Handphone</td>
    <td><input type="text" class="form-control" name="daftar_narahubung_handphone" value="<?php echo set_value('daftar_narahubung_handphone') ?>" placeholder="Handphone" size="40"></td>
  </tr>

  <td>Bersedia / Tidak Bersedia menjadi Kolaborator Penyelenggara</td>
  <tr valign="baseline">
    <td align="right" nowrap></td>
    <td><select class="form-control" name="daftar_bersedia_kolabolator" id="daftar_bersedia_kolabolator">
        <option value="Bersedia">Bersedia</option>
        <option value="Tidak Bersedia">Tidak Bersedia</option>
      </select>
    </td>
    </tr>
  <tr valign="baseline">
    <td align="right" nowrap>Penyelenggara</td>
    <td><select class="form-control" name="daftar_Penyelenggara" id="daftar_Penyelenggara">
        <option value="Penyelenggara Mandiri">Penyelenggara Mandiri</option>
        <option value="Penyelenggara Bersama">Penyelenggara Bersama</option>
      </select>
    </td></tr>

    <td>Bersedia / Tidak Bersedia menjadi narasumber </td>
  <tr valign="baseline">
    <td align="right" nowrap></td>
    <td><select class="form-control" name="daftar_bersedia_narasumber" id="daftar_bersedia_narasumber">
        <option value="Bersedia">Bersedia</option>
        <option value="Tidak Bersedia">Tidak Bersedia</option>
      </select>
    </td></tr>
  <tr valign="baseline">
    <td align="right" nowrap>Dari Mata Ajar</td>
    <td><select class="form-control" name="daftar_mataajar" id="daftar_mataajar">
        <option value="1.Memahami Risiko COVID-19 dan Upaya pencegahan (Pengegahan dan mitigasi)">
          1.Memahami Risiko COVID-19 dan Upaya pencegahan (Pengegahan dan mitigasi)
        </option>
        <option value="2.Penanganan Kesehatan di Rumah untuk COVID-19 (Kesiapsiagaan dan Penanganan Darurat)">
          2.Penanganan Kesehatan di Rumah untuk COVID-19 (Kesiapsiagaan dan Penanganan Darurat)
        </option>
        <option value="3.Beradaptasi Dengan kondisi COVID-19 (Tatanan Normal Baru)">
          3.Beradaptasi Dengan kondisi COVID-19 (Tatanan Normal Baru)
        </option>
        <option value="4.Gender dan Inklusivitas dalam dalam Membangun Ketangguhan Keluarga dalam Menghadapi COVID-19">
          4.Gender dan Inklusivitas dalam dalam Membangun Ketangguhan Keluarga dalam Menghadapi COVID-19
        </option>
        <option value="5.Inisiatif Membangun Ketangguhan Keluarga Berbasis Ekonomi Produktif dan Aman COVID-19">
          5.Inisiatif Membangun Ketangguhan Keluarga Berbasis Ekonomi Produktif dan Aman COVID-19
        </option>
      </select>
    </td></tr>

    <td>Bersedia / Tidak bersedia memobilisasi peserta untuk mengikuti kegiatan</td>
  <tr valign="baseline">
    <td align="right" nowrap></td>
    <td><select class="form-control" name="daftar_memobilisasi" id="daftar_memobilisasi">
        <option value="Bersedia">Bersedia</option>
        <option value="Tidak Bersedia">Tidak Bersedia</option>
      </select>
    </td></tr>

    <td>Bersedia/Tidak Bersedia menjadi peserta untuk mengikuti kegiatan</td>
  <tr valign="baseline">
    <td align="right" nowrap></td>
    <td><select class="form-control" name="daftar_peserta" id="daftar_peserta">
        <option value="Bersedia">Bersedia</option>
        <option value="Tidak Bersedia">Tidak Bersedia</option>
      </select>
    </td></tr>



  <tr valign="baseline">
    <td nowrap align="right">&nbsp;</td>
    <td><input name="Submit" type="submit" class="btn btn-primary btn-lg" value="Simpan data daftar">
      <input name="Submit2" type="reset" class="btn btn-primary btn-lg" value="Reset">
    </td>
  </tr>
</table>
<input type="hidden" name="MM_insert" value="form1">
</form>
