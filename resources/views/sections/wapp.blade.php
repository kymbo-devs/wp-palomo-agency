<?php
// Codifica el mensaje para que sea seguro en la URL
$encodedMessage = urlencode($whatsapp_text);

// Construye la URL de WhatsApp
$whatsappUrl = "https://api.whatsapp.com/send?phone=$whatsapp_number&text=$encodedMessage";
?>

<a
class="fixed rounded-full right-8 bottom-20 lg:right-16 lg:bottom-16 animated-background bg-gradient-to-t  hover:bg-gradient-to-l from-[#C78C5A] via-[#C78C5A] to-[#61442C] p-3 transition-all ease-in-out duration-500"
href="<?php echo $whatsappUrl; ?>"
>
    <x-bi-whatsapp class="size-10 text-white"/>
</a>
