$(".js-modal__save").click(function(event) {
    let startDate = $("#startDate").val();
    let endDate = $("#endDate").val();

    if(startDate === '' || endDate === ''){
        app.showNotify({text:'Inputs are empty', type:'error'});
    }
    else{
        let params = {
            module: 'Cars',
            action: 'GenerateRates',
            type: 'POST',
            id: $("#id").val(),
            fuel: $("#fuel").val(),
            startDate: startDate,
            endDate: endDate
        };
        AppConnector.request(params).done(function (data){
            let result = data.result;
            console.log(result);
            location.reload();
            app.hideModalWindow();
            app.showNotify({text:'Obliczonie', type:'success'});
        });
    }
});