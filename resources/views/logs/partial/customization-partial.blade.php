


<div class="panel panel-default">

    <div class="panel-heading" style="text-align: center; background-color: #54B2C7">
        <h3 class="panel-title">
            Customization Section
        </h3>
    </div>

    <div class="panel-body">

        <div class="row">
            <div class="col-sm-12" id="custom-template">
                @if(isset($base_log) === true)
                     <?php echo $base_log->html_text ; ?>
                @endif
            </div>
        </div>
    </div>
</div>

