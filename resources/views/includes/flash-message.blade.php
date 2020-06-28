<script> 
    window.livewire.on('success', message => {
        $.toast({
            heading: 'Success',
            text: message,
            icon: 'success',
            position: 'top-right',
            loader: true,        // Change it to false to disable loader
            loaderBg: '#9EC600'  // To change the background
        })
    })
  
    window.livewire.on('error', message => {
        $.toast({
            heading: 'Error',
            text: message,
            position: 'top-right',
            icon: 'error',
            loader: true,        // Change it to false to disable loader
            loaderBg: '#9EC600'  // To change the background
        })
    })

    window.livewire.on('warning', message => {
        $.toast({
            heading: 'Warning',
            text: message,
            icon: 'warning',
            position: 'top-right',
            loader: true,        // Change it to false to disable loader
            loaderBg: '#9EC600'  // To change the background
        })
    })


    window.livewire.on('info', message => {
        $.toast({
            heading: 'Info',
            text: message,
            icon: 'info',
            position: 'top-right',
            loader: true,        // Change it to false to disable loader
            loaderBg: '#9EC600'  // To change the background
        })
    })
    </script>