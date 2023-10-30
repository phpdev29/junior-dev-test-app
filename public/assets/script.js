$(document).ready(function() {
    var $form = $('#product_form');
    if($form.length){
        $form.validate({
            rules:{
                sku:{
                    required: true,
                    normalizer: function(value){
                        return $.trim(value);
                    }
                },
                name:{
                    required: true,
                    normalizer: function(value){
                        return $.trim(value);
                    }
                },
                price:{
                    number: true,
                    required: true,
                    normalizer: function(value){
                        return $.trim(value);
                    }  
                },
                productType:{
                    required: true
                },
                size:{
                    number: true,
                    required: true,
                    normalizer: function(value){
                        return $.trim(value);
                    }
                
                }, 
                height:{
                    number: true,
                    required: true,
                    normalizer: function(value){
                        return $.trim(value);
                    }
                
                },
                width:{
                    number: true,                    
                    required: true,
                    normalizer: function(value){
                        return $.trim(value);
                    }
                
                },
                length:{
                    number: true,
                    required: true,
                    normalizer: function(value){
                        return $.trim(value);
                    }
                
                },
                weight:{
                    number: true,
                    required: true,
                    normalizer: function(value){
                        return $.trim(value);
                    }
                }
            },
            messages:{
                sku:{
                    required: "Please submit required data"
                },
                name:{
                    required: "Please submit required data"
                },
                price:{
                    required: "Please submit required data",
                    number: "Please provide the data of indicated type"
                },
                productType:{
                    required: "Please submit required data"
                },
                size:{
                    required: "Please submit required data",
                    number: "Please provide the data of indicated type"
                },
                height:{
                    required: "Please submit required data",
                    number: "Please provide the data of indicated type"
                },
                width:{
                    required: "Please submit required data",
                    number: "Please provide the data of indicated type"
                },
                length:{
                    required: "Please submit required data",
                    number: "Please provide the data of indicated type"
                },
                weight:{
                    required: "Please submit required data",
                    number: "Please provide the data of indicated type"
                }
            }
        })
    }
        $('#productType').change(function(){
            var value = $(this).val();
            if (value == 'DVD') {
                $('#dvd').show();
            } else {
                $('#dvd').hide();
            }
            if (value == 'Furniture') {
                $('#furniture').show();
            } else {
                $('#furniture').hide();
            }
            if (value == 'Book') {
                $('#book').show();
            } else {
                $('#book').hide();
            }
        });
    });
