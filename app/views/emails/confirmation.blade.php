@extends('emails\mailLayout')

@section('content')

<table style="border-collapse: collapse;border-spacing: 0;Margin-left: auto;Margin-right: auto">
    <tbody><tr>
      <td class="border" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #ddb;width: 1px">​</td>
      <td style="padding: 0;vertical-align: top">
        <table class="one-col" style="border-collapse: collapse;border-spacing: 0;Margin-left: auto;Margin-right: auto;width: 600px;background-color: #ffffff">
          <tbody><tr>
            <td class="column" style="padding: 0;vertical-align: top;text-align: left">
              <div><div class="column-top" style="font-size: 50px;line-height: 50px">&nbsp;</div></div>
              <table class="contents" style="border-collapse: collapse;border-spacing: 0;width: 100%">
                  <tbody><tr>
                    <td class="padded" style="padding: 0;vertical-align: top;padding-left: 50px;padding-right: 50px">
                      
                        <h1 style="Margin-top: 0;color: #152438;font-weight: 400;font-size: 40px;Margin-bottom: 20px;font-family: Avenir,sans-serif;line-height: 46px">Congratulation!</h1><p style="Margin-top: 0;color: #60666d;font-size: 15px;font-family: sans-serif;line-height: 24px;Margin-bottom: 24px">Hi, {{$name}} </p><p style="Margin-top: 0;color: #60666d;font-size: 15px;font-family: sans-serif;line-height: 24px;Margin-bottom: 24px">You have been registered to PerdTye.com<br>
                        Please click at the button below to confirm this email</p>
                        
                    </td>
                </tr>
            </tbody></table>
            
            <div class="column-bottom" style="font-size: 26px;line-height: 26px">&nbsp;</div>
        </td>
    </tr>
</tbody></table>
</td>
<td class="border" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #ddb;width: 1px">​</td>
</tr>
</tbody></table>

@stop