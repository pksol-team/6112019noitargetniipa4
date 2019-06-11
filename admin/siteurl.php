 <ul class="page-breadcrumb breadcrumb">
 <?php $f_i_l_e_n_a_m_e = basename($_SERVER['PHP_SELF']);
							
							?>
                            <li>
                                <a href="index.php">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
							<?php if($f_i_l_e_n_a_m_e=='companyedit.php') {?>
                                <a href="<?php echo $f_i_l_e_n_a_m_e;?>?id=<?php echo $id;?>">Company Edit</a>
								
							<?php } elseif($f_i_l_e_n_a_m_e=='c_order_view.php' or $f_i_l_e_n_a_m_e=='new.php') { ?>
							<a href="<?php echo $f_i_l_e_n_a_m_e;?>">Order Data</a>
							
							<?php }elseif($f_i_l_e_n_a_m_e=='c_order.php') { ?>
							<a href="<?php echo $f_i_l_e_n_a_m_e;?>?id=<?php echo $id;?>">Company Add</a>
							
							<?php }elseif($f_i_l_e_n_a_m_e=='company.php') { ?>
							<a href="<?php echo $f_i_l_e_n_a_m_e;?>?id=<?php echo $id;?>">Company</a>
							
							<?php }elseif($f_i_l_e_n_a_m_e=='companyview.php') { ?>
							<a href="<?php echo $f_i_l_e_n_a_m_e;?>">Company</a>
							<?php } ?>
                            </li>
                            
                        </ul>