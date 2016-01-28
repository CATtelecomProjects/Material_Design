<!--    Start     Dialog Login-->
<div aria-hidden="false" class="modal fade" id="modal-login" role="dialog" tabindex="-1">
  <div class="modal-dialog modal-xs">
    <div class="modal-content">
      <div class="modal-heading"> <a class="modal-close" data-dismiss="modal">&times;</a> 
        <!--	<h2 class="modal-title">Modal Title</h2> --> 
        <a class="collapsed waves-button waves-effect" data-toggle="collapse" href="#collapsible-region" title="หมายเหตุ"><span class="collapsed-hide"><i class="fa fa-angle-double-up fa-2x"></i></span><span class="collapsed-show"><i class="fa fa-angle-double-down fa-2x"></i></span></a> </div>
      <div class="modal-inner">
        <div class="card-main">
          <div class="card-header">
            <div class="card-inner">
              <h1 class="card-heading">Login </h1>
            </div>
          </div>
          <div class="card-inner">
            <p class="text-center"> <span class="avatar avatar-inline avatar-lg"> <img alt="Login" src="images/users/avatar-001.jpg"> </span> </p>
            <form class="form" action="index.html">
              <div class="form-group form-group-label">
                <div class="row">
                  <div class="col-md-10 col-md-push-1">
                    <label class="floating-label" for="login-username">Username</label>
                    <input class="form-control" id="login-username" type="text">
                  </div>
                </div>
              </div>
              <div class="form-group form-group-label">
                <div class="row">
                  <div class="col-md-10 col-md-push-1">
                    <label class="floating-label" for="login-password">Password</label>
                    <input class="form-control" id="login-password" type="password">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-10 col-md-push-1">
                    <button class="btn btn-block btn-green waves-button waves-effect waves-light"><i class="fa fa-sign-in"></i> Sign In</button>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-10 col-md-push-1">
                    <div class="collapsible-region collapse" id="collapsible-region">
                      <table width="100%" border="0" cellpadding="1" cellspacing="1">
                        <tr>
                          <td><span style="color:#ff0000;">&nbsp;&nbsp;&nbsp;&nbsp;1. ใช้รหัสผ่านเดียวกันกับ Intranet , กรณีลืม Username หรือ Password คลิกที่ <a href="#" class="link_forget">ลืมรหัสผ่าน</a> ระบบจะส่งข้อมูลไปยัง E-Mail ของท่าน
                            <label></label>
                            </span></td>
                        </tr>
                        <tr>
                          <td align="left"><span style="color:#ff0000;">&nbsp;&nbsp;&nbsp;&nbsp;2.
                            กรณีสอบถามข้อมูลเพิ่มเติมติดต่อ<b> IT Call Center 7557</b></span></td>
                        </tr>
                        <tr>
                          <td><span style="color:#003399;">* สำหรับผู้ที่มีสิทธิใช้ระบบสารสนเทศทางธุรกิจเท่านั้นที่สามารถใช้ Username  ที่อ้างอิงมาจาก User ของ E-mail  กสท. ตัวอย่างเช่น Username ใน E-mail ของ กสท. คือ   abc.d@cattelecom.com   ดังนั้น Username และ Password ที่เข้าใช้งานคือ abc.d เหมือนกัน และระบบจะบังคับให้มีการเปลี่ยน Password ใหม่ทุก 3 เดือน 
                            ผู้ใช้งานกรุณาเปลี่ยน Password ด้วยตนเอง ตามระยะเวลาที่กำหนด </span></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--   End  Dialog Login--> 

<!--     Dialog Logout-->
<div aria-hidden="true" class="modal fade" id="modal-logout" role="dialog" tabindex="-1">
  <div class="modal-dialog modal-xs">
    <div class="modal-content">
      <div class="modal-heading"> <a class="modal-close" data-dismiss="modal">&times;</a>
        <h2 class="modal-title">Confirm!</h2>
      </div>
      <div class="modal-inner">
        <p><strong>Are you sure you want to logout, Yes or No ?</strong></p>
      </div>
      <div class="modal-footer">
        <p class="text-right">
          <button class="btn btn-green btn-alt" data-dismiss="modal" type="button"><i class="fa fa-check"></i> Yes</button>
          <button class="btn btn-orange btn-alt" data-dismiss="modal" type="button"><i class="fa fa-close"></i> No</button>
        </p>
      </div>
    </div>
  </div>
</div>
<!--   End  Dialog Logout-->

<div aria-hidden="true" class="modal fade" id="modal-iframe" role="dialog" tabindex="-1">
  <div class="modal-dialog modal-full">
    <div class="modal-content">
      <iframe class="iframe-seamless" src="dwdm-term-of-use.php" title="Modal with iFrame"></iframe>
    </div>
  </div>
</div>