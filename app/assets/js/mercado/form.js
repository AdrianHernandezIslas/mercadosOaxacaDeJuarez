const formMercado = (()=>{
    const setData = (data = {}) => {
        console.log(data)
        Object.keys(data).forEach((key) => {
            
            const $input = document.getElementById(key);
            if($input){
                    $input.value = "";
                   $input.value = data[key]; 
            }
        });
    };

    return {
        setData
    };
})();