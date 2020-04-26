$(document).ready(function(){
    // Smart Wizard
    $('#smartwizard').smartWizard({
            selected: 0,
            theme: 'arrows',
            transitionEffect:'fade',
            toolbarSettings: {toolbarPosition: 'bottom'}
         });
    $("#smartwizard").on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
    	var stepnum = stepNumber+1;
        var elmForm = $("#form-step-" + stepNumber);
        // stepDirection === 'forward' :- this condition allows to do the form validation
        // only on forward navigation, that makes easy navigation on backwards still do the validation when going next
        if(stepDirection === 'forward' && elmForm){
            elmForm.validator('validate');
            var elmErr = elmForm.children('.has-errors');
            if(elmErr && elmErr.length > 0){
                // Form validation failed
               return false;
            }
        }
        return confirm("Are you sure you want to leave Step "+stepnum+'?');
    });
});