function calculation() {
    var num1 = $("input[name='num1'").val();
    var num2 = $("input[name='num2'").val();
    $.ajax({
        headers:{
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]') .attr('content')
        },
        type: "POST",
        url: "/calculation/execution",
        data: {
            num1: String(num1),
            num2: String(num2)
        },
        datatype: "json"
    }).done(function (data) {
        const json = JSON.parse(data);
        if(json.status == 200) {
            let addition = document.getElementById("addition");
            let subtraction = document.getElementById("subtraction");
            let multiplication = document.getElementById("multiplication");
            let dividing = document.getElementById("dividing");
            addition.textContent = "足し算の結果は"+json.addition;
            subtraction.textContent = "掛け算の結果は"+json.subtraction;
            multiplication.textContent = "引き算の結果は"+json.multiplication;
            dividing.textContent = "割り算の結果は"+json.dividing;
            console.log("通信完了");
        }
    }).fail(function (jqXHR, textStatus, errorThrown) {
        console.log('通信に失敗しました');
        console.log("jqXHR"+ jqXHR.status);
        console.log("textStatus"+ textStatus);
        console.log("errorThrown"+ errorThrown.message);
    });
}