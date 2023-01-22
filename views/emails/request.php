<html><body>
    <h1>It Works.</h1>
    <p>Dear supervisor, employee '.<?=$name?>.' requested for some time off, starting on
        '.<?=$request_start?>.' and ending on '.<?=$request_end?>!.', stating the reason:
        '.$reason.'
        Click on one of the below links to approve or reject the application:
        <a  class=”link” href="http://localhost/holidays/public/email/index/response/accept" target="_blank">
            Accept             
        </a>
        <a  class=”link” href="http://localhost/holidays/public/email/index/response/reject" target="_blank">
            Reject             
        </a>'</p>
  </body></html>