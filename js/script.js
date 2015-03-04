function initialize() {
    var mapCanvas = document.getElementById('map-canvas');
    var myLatlng = new google.maps.LatLng(10.24533, 77.529767);
    var mapOptions = {
        center: myLatlng,
        zoom: 16,
        mapTypeId: google.maps.MapTypeId.HYBRID,
        disableDefaultUI:true
    };
    var map = new google.maps.Map(mapCanvas, mapOptions);
    var marker = new google.maps.Marker({
        position: myLatlng,
        title:"KCC College!"
    });

// To add the marker to the map, call setMap();
    marker.setMap(map);
}

$(document).ready(function () {
    $('[data-toggle="offcanvas"]').click(function () {
        $('.row-offcanvas').toggleClass('active')
    });
    $('#mytable').dataTable();
});

$(".adds").click(function () {
    window.location.href="addstaff.php";
});

$(".addst").click(function () {
    window.location.href="addstudents.php";
});


$(".btnremove").click(function () {
    id=this.value;
    var ans=confirm("Are you sure to delete student "+id);
    if(ans)
    {
        var saveButton=$(this);
        saveButton.attr("disabled",true);
        $.post("delete.php",{

            id:id
        },function(data,status){


            alert(data);
            if (data === 'success')
                window.location.reload();
            else alert(data);
            saveButton.attr('disabled',false);

        });


    }
});

$(".btnremoves").click(function () {
    id=this.value;
    var ans=confirm("Are you sure to delete staff "+id);
    if(ans)
    {
        var saveButton=$(this);
        saveButton.attr("disabled",true);
        $.post("deletes.php",{
            id:id
        },function(data,status){
            alert(data);
            if (data === 'success')
                window.location.reload();
            else alert(data);
            saveButton.attr('disabled',false);
        });


    }
});


$(".btnedit").click(function () {
    id=this.value;
    window.location.href="editstudent.php?id="+id;
});

$(".staffbtnedit").click(function () {
    id=this.value;
    window.location.href="editstudentstaff.php?id="+id;
});

$(".btnedits").click(function () {
    id=this.value;
    window.location.href="editstaff.php?id="+id;
});


$(".search").click(function () {
    id= document.getElementById("search").value;
    window.location.href="editstudent.php?id="+id;
});


$(".searchs").click(function () {
    id= document.getElementById("searchst").value;
    window.location.href="editstaff.php?id="+id;
});


$(".searchstaff").click(function () {
    id= document.getElementById("search").value;
    window.location.href="editstudentstaff.php?id="+id;
});


$(".msgremove").click(function () {
    id=this.value;
    var ans=confirm("Are you sure to delete message "+id);
    if(ans)
    {
        var saveButton=$(this);
        saveButton.attr("disabled",true);
        $.post("deletemessage.php",{
            id:id
        },function(data,status){
            alert(data);
            if (data === 'success')
                window.location.reload();
            else alert(data);
            saveButton.attr('disabled',false);
        });


    }
});

$(".msgedit").click(function () {
    id=this.value;
    window.location.href="editmessage.php?id="+id;
});


$('.carousel').carousel({
    interval: 2000
})