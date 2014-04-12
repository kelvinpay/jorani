<h2>Edit Contract</h2>

<?php echo validation_errors(); ?>

<?php
$attributes = array('id' => 'target');
echo form_open('contracts/edit/' . $contract['id'], $attributes); ?>

    <input type="hidden" name="id" value="<?php echo $contract['id']; ?>" required />
    
    <label for="name">Name</label>
    <input type="input" name="name" value="<?php echo $contract['name']; ?>" required /><br />
  
    <label for="startentdatemonth">Month / Start</label>
    <select name="startentdatemonth" required>
        <option value="1" <?php if (substr($contract['startentdate'], 0, 2) == '1') { echo "selected"; } ?>>January</option>
        <option value="2" <?php if (substr($contract['startentdate'], 0, 2) == '2') { echo "selected"; } ?>>February</option>
        <option value="3" <?php if (substr($contract['startentdate'], 0, 2) == '3') { echo "selected"; } ?>>March</option>
        <option value="4" <?php if (substr($contract['startentdate'], 0, 2) == '4') { echo "selected"; } ?>>April</option>
        <option value="5" <?php if (substr($contract['startentdate'], 0, 2) == '5') { echo "selected"; } ?>>May</option>
        <option value="6" <?php if (substr($contract['startentdate'], 0, 2) == '6') { echo "selected"; } ?>>June</option>
        <option value="7" <?php if (substr($contract['startentdate'], 0, 2) == '7') { echo "selected"; } ?>>July</option>
        <option value="8" <?php if (substr($contract['startentdate'], 0, 2) == '8') { echo "selected"; } ?>>August</option>
        <option value="9" <?php if (substr($contract['startentdate'], 0, 2) == '9') { echo "selected"; } ?>>September</option>
        <option value="10" <?php if (substr($contract['startentdate'], 0, 2) == '10') { echo "selected"; } ?>>October</option>
        <option value="11" <?php if (substr($contract['startentdate'], 0, 2) == '11') { echo "selected"; } ?>>November</option>
        <option value="12" <?php if (substr($contract['startentdate'], 0, 2) == '12') { echo "selected"; } ?>>December</option>
    </select>
    
    <label for="startentdateday">Day / Start</label>
    <select name="startentdateday" required>
        <option value='1' <?php if (substr($contract['startentdate'], 3, 2) == '1') { echo "selected"; } ?>>1</option>
        <option value='2' <?php if (substr($contract['startentdate'], 3, 2) == '2') { echo "selected"; } ?>>2</option>
        <option value='3' <?php if (substr($contract['startentdate'], 3, 2) == '3') { echo "selected"; } ?>>3</option>
        <option value='4' <?php if (substr($contract['startentdate'], 3, 2) == '4') { echo "selected"; } ?>>4</option>
        <option value='5' <?php if (substr($contract['startentdate'], 3, 2) == '5') { echo "selected"; } ?>>5</option>
        <option value='6' <?php if (substr($contract['startentdate'], 3, 2) == '6') { echo "selected"; } ?>>6</option>
        <option value='7' <?php if (substr($contract['startentdate'], 3, 2) == '7') { echo "selected"; } ?>>7</option>
        <option value='8' <?php if (substr($contract['startentdate'], 3, 2) == '8') { echo "selected"; } ?>>8</option>
        <option value='9' <?php if (substr($contract['startentdate'], 3, 2) == '9') { echo "selected"; } ?>>9</option>
        <option value='10' <?php if (substr($contract['startentdate'], 3, 2) == '10') { echo "selected"; } ?>>10</option>
        <option value='11' <?php if (substr($contract['startentdate'], 3, 2) == '11') { echo "selected"; } ?>>11</option>
        <option value='12' <?php if (substr($contract['startentdate'], 3, 2) == '12') { echo "selected"; } ?>>12</option>
        <option value='13' <?php if (substr($contract['startentdate'], 3, 2) == '13') { echo "selected"; } ?>>13</option>
        <option value='14' <?php if (substr($contract['startentdate'], 3, 2) == '14') { echo "selected"; } ?>>14</option>
        <option value='15' <?php if (substr($contract['startentdate'], 3, 2) == '15') { echo "selected"; } ?>>15</option>
        <option value='16' <?php if (substr($contract['startentdate'], 3, 2) == '16') { echo "selected"; } ?>>16</option>
        <option value='17' <?php if (substr($contract['startentdate'], 3, 2) == '17') { echo "selected"; } ?>>17</option>
        <option value='18' <?php if (substr($contract['startentdate'], 3, 2) == '18') { echo "selected"; } ?>>18</option>
        <option value='19' <?php if (substr($contract['startentdate'], 3, 2) == '19') { echo "selected"; } ?>>19</option>
        <option value='20' <?php if (substr($contract['startentdate'], 3, 2) == '20') { echo "selected"; } ?>>20</option>
        <option value='21' <?php if (substr($contract['startentdate'], 3, 2) == '21') { echo "selected"; } ?>>21</option>
        <option value='22' <?php if (substr($contract['startentdate'], 3, 2) == '22') { echo "selected"; } ?>>22</option>
        <option value='23' <?php if (substr($contract['startentdate'], 3, 2) == '23') { echo "selected"; } ?>>23</option>
        <option value='24' <?php if (substr($contract['startentdate'], 3, 2) == '24') { echo "selected"; } ?>>24</option>
        <option value='25' <?php if (substr($contract['startentdate'], 3, 2) == '25') { echo "selected"; } ?>>25</option>
        <option value='26' <?php if (substr($contract['startentdate'], 3, 2) == '26') { echo "selected"; } ?>>26</option>
        <option value='27' <?php if (substr($contract['startentdate'], 3, 2) == '27') { echo "selected"; } ?>>27</option>
        <option value='28' <?php if (substr($contract['startentdate'], 3, 2) == '28') { echo "selected"; } ?>>28</option>
        <option value='29' <?php if (substr($contract['startentdate'], 3, 2) == '29') { echo "selected"; } ?>>29</option>
        <option value='30' <?php if (substr($contract['startentdate'], 3, 2) == '30') { echo "selected"; } ?>>30</option>
        <option value='31' <?php if (substr($contract['startentdate'], 3, 2) == '31') { echo "selected"; } ?>>31</option>
    </select>
    
    <br /><br />
    
    <label for="endentdatemonth">Month / End</label>
    <select name="endentdatemonth" required>
        <option value="1" <?php if (substr($contract['endentdate'], 0, 2) == '1') { echo "selected"; } ?>>January</option>
        <option value="2" <?php if (substr($contract['endentdate'], 0, 2) == '2') { echo "selected"; } ?>>February</option>
        <option value="3" <?php if (substr($contract['endentdate'], 0, 2) == '3') { echo "selected"; } ?>>March</option>
        <option value="4" <?php if (substr($contract['endentdate'], 0, 2) == '4') { echo "selected"; } ?>>April</option>
        <option value="5" <?php if (substr($contract['endentdate'], 0, 2) == '5') { echo "selected"; } ?>>May</option>
        <option value="6" <?php if (substr($contract['endentdate'], 0, 2) == '6') { echo "selected"; } ?>>June</option>
        <option value="7" <?php if (substr($contract['endentdate'], 0, 2) == '7') { echo "selected"; } ?>>July</option>
        <option value="8" <?php if (substr($contract['endentdate'], 0, 2) == '8') { echo "selected"; } ?>>August</option>
        <option value="9" <?php if (substr($contract['endentdate'], 0, 2) == '9') { echo "selected"; } ?>>September</option>
        <option value="10" <?php if (substr($contract['endentdate'], 0, 2) == '10') { echo "selected"; } ?>>October</option>
        <option value="11" <?php if (substr($contract['endentdate'], 0, 2) == '11') { echo "selected"; } ?>>November</option>
        <option value="12" <?php if (substr($contract['endentdate'], 0, 2) == '12') { echo "selected"; } ?>>December</option>
    </select>
    
    <label for="endentdateday">Day / End</label>
    <select name="endentdateday" required>
        <option value='1' <?php if (substr($contract['endentdate'], 3, 2) == '1') { echo "selected"; } ?>>1</option>
        <option value='2' <?php if (substr($contract['endentdate'], 3, 2) == '2') { echo "selected"; } ?>>2</option>
        <option value='3' <?php if (substr($contract['endentdate'], 3, 2) == '3') { echo "selected"; } ?>>3</option>
        <option value='4' <?php if (substr($contract['endentdate'], 3, 2) == '4') { echo "selected"; } ?>>4</option>
        <option value='5' <?php if (substr($contract['endentdate'], 3, 2) == '5') { echo "selected"; } ?>>5</option>
        <option value='6' <?php if (substr($contract['endentdate'], 3, 2) == '6') { echo "selected"; } ?>>6</option>
        <option value='7' <?php if (substr($contract['endentdate'], 3, 2) == '7') { echo "selected"; } ?>>7</option>
        <option value='8' <?php if (substr($contract['endentdate'], 3, 2) == '8') { echo "selected"; } ?>>8</option>
        <option value='9' <?php if (substr($contract['endentdate'], 3, 2) == '9') { echo "selected"; } ?>>9</option>
        <option value='10' <?php if (substr($contract['endentdate'], 3, 2) == '10') { echo "selected"; } ?>>10</option>
        <option value='11' <?php if (substr($contract['endentdate'], 3, 2) == '11') { echo "selected"; } ?>>11</option>
        <option value='12' <?php if (substr($contract['endentdate'], 3, 2) == '12') { echo "selected"; } ?>>12</option>
        <option value='13' <?php if (substr($contract['endentdate'], 3, 2) == '13') { echo "selected"; } ?>>13</option>
        <option value='14' <?php if (substr($contract['endentdate'], 3, 2) == '14') { echo "selected"; } ?>>14</option>
        <option value='15' <?php if (substr($contract['endentdate'], 3, 2) == '15') { echo "selected"; } ?>>15</option>
        <option value='16' <?php if (substr($contract['endentdate'], 3, 2) == '16') { echo "selected"; } ?>>16</option>
        <option value='17' <?php if (substr($contract['endentdate'], 3, 2) == '17') { echo "selected"; } ?>>17</option>
        <option value='18' <?php if (substr($contract['endentdate'], 3, 2) == '18') { echo "selected"; } ?>>18</option>
        <option value='19' <?php if (substr($contract['endentdate'], 3, 2) == '19') { echo "selected"; } ?>>19</option>
        <option value='20' <?php if (substr($contract['endentdate'], 3, 2) == '20') { echo "selected"; } ?>>20</option>
        <option value='21' <?php if (substr($contract['endentdate'], 3, 2) == '21') { echo "selected"; } ?>>21</option>
        <option value='22' <?php if (substr($contract['endentdate'], 3, 2) == '22') { echo "selected"; } ?>>22</option>
        <option value='23' <?php if (substr($contract['endentdate'], 3, 2) == '23') { echo "selected"; } ?>>23</option>
        <option value='24' <?php if (substr($contract['endentdate'], 3, 2) == '24') { echo "selected"; } ?>>24</option>
        <option value='25' <?php if (substr($contract['endentdate'], 3, 2) == '25') { echo "selected"; } ?>>25</option>
        <option value='26' <?php if (substr($contract['endentdate'], 3, 2) == '26') { echo "selected"; } ?>>26</option>
        <option value='27' <?php if (substr($contract['endentdate'], 3, 2) == '27') { echo "selected"; } ?>>27</option>
        <option value='28' <?php if (substr($contract['endentdate'], 3, 2) == '28') { echo "selected"; } ?>>28</option>
        <option value='29' <?php if (substr($contract['endentdate'], 3, 2) == '29') { echo "selected"; } ?>>29</option>
        <option value='30' <?php if (substr($contract['endentdate'], 3, 2) == '30') { echo "selected"; } ?>>30</option>
        <option value='31' <?php if (substr($contract['endentdate'], 3, 2) == 31) { echo "selected"; } ?>>31</option>
    </select>

    <br /><br />
    <button type="submit" class="btn btn-primary"><i class="icon-ok icon-white"></i>&nbsp;Update contract</button>
    &nbsp;
    <a href="<?php echo base_url();?>contracts" class="btn btn-primary"><i class="icon-remove icon-white"></i>&nbsp;Cancel</a>
</form>
