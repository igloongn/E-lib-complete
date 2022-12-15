$(document).ready(function () {

    const TEMPLATE_ID = 'template_f0pog1c';
    // const Private_Key = 'wXnX5bUvqKMS0HCsM3OVE'
    const Public_Key = 'yYIW4V2Rfr0c8WFTG'
    const service_id = 'service_iisjfnr'
    
    
    
    // $('#contact-form').submit(function (e) { 
    //     e.preventDefault();
    //     console.log(e.target);
    //     // var templateParams = {
    //     //     to_name: 'James',
    //     //     from_name: 'Check this out!',
    //     //     message: 'This is the Inside Codes'
    //     // };
        
    //     emailjs.sendForm(service_id, TEMPLATE_ID, e.target, Public_Key)
    //     // emailjs.sendForm(service_id, TEMPLATE_ID, templateParams, Public_Key)
    //     .then(
    //       result => {
    //         console.log(result.text)
    //       },
    //       error => {
    //         console.log(error.text)
    //       }
    //     )
    // });
    // $('#request-form').submit(function (e) { 
    $('#submit-button').click(function (e) { 
        e.preventDefault();
        var name = $('#name').val();
        var email = $('#email').val();
        var phone_number = $('#phone_number').val();
        var level = $('#level').val();
        var dept = $('#dept').val();
        var paper = $('#paper').val();
        var message = $('#message').val();
    
        console.log(name);
        console.log(email);
        console.log(level);
        console.log(dept);
        console.log(message);
        console.log(paper);
        var Params = {
            from_name: name,
            subject: message,
            level:level,
            dept:dept,
            // paper:paper,
            phone_number: phone_number,
            email: email,
        };
        
    
        emailjs.send(service_id, TEMPLATE_ID, Params, Public_Key)
            .then(function(response) {
               console.log('SUCCESS!', response.status, response.text);
            }, function(error) {
               console.log('FAILED...', error);
            });});
    
    
    
    
    });