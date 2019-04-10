
$(document).ready(function(e) {
    $('#addFlight').click(function() {
        var destination = $('#dest').val();
        var price = $('#price').val();
        var description = $('#desc').val();
        var className = $('#class').val();
        var commision = $('#commision').val();
        // var supplier = $('#suppName').val();
        var supplierId = $('#supId').val();
        var departureTime = $('#departureTime').val();
        var arrivalTime = $('#arrivalTime').val();
        var itenary = $('#itenaryNumber').val();
       console.log(supplierId);
        $.ajax({
            url:'vendorFormHandler.php',
            type:'POST',
            datatype:'jsonp',
            data:{
                destination:destination,
                price:price,
                description:description,
                className:className,
                commision:commision,
                // supplier:supplier,
                supplierId:supplierId,
                departureTime:departureTime,
                arrivalTime:arrivalTime,
                itenary:itenary
            },

            success : function(result){

                alert('Your flight has been added');
                console.log(result);
            }
        });

    })
});
console.log();


$(document).ready(function(e) {
    $('#removeFlight').click(function() {
        var bookingdetailId = $('#booking').val();
        var supplierId = $('#supId').val();
        $.ajax({
            url:'removeVendor.php',
            type:'POST',
            datatype:'jsonp',
            data:{
                supplierId:supplierId,
                bookingdetailId:bookingdetailId
            },

            success : function(result){

                alert(bookingdetailId +' has been deleted');
                console.log(result);
            }
        });

    })
});
