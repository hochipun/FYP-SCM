
            <li <?php if ($type=='profile') echo 'class="active"';?> ><a href="<?php echo site_url('clientmain');?>">View Profile</a></li>            
            <li <?php if ($type=='myorder') echo 'class="active"';?> ><a href="<?php echo site_url('clientmain/myorder');?>">My Order <span class="badge">42</span> </a></li>
            <li <?php if ($type=='neworder') echo 'class="active"';?> ><a href="<?php echo site_url('clientmain/neworder');?>">New Order </a></li>

          </ul>
          
        </div>