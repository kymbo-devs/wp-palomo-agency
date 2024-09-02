<popup-newsletter class="fixed z-50 max-md:z-[100]">
    <div data-popup-open class="fixed rounded-2xl right-8 bottom-40 lg:right-16 lg:bottom-36 animated-background bg-gradient-to-t  hover:bg-gradient-to-l from-[#C78C5A] via-[#C78C5A] to-[#61442C] p-2 transition-all ease-in-out duration-500">
        @svg('popup-icon', 'h-10 w-auto')
    </div>
    <div data-popup-overlay class="fixed top-0 left-0 bg-[#00000030] w-screen h-screen hidden items-center justify-center z-40">
    </div>
    <div data-popup class="fixed top-0 left-0 w-screen h-screen hidden items-center justify-center z-50">
        <div class="relative grid grid-cols-2 max-md:grid-cols-1 w-[65vw] h-[590px] max-md:h-auto max-md:w-[80vw] bg-primary-300 rounded-[40px] overflow-hidden shadow-[0px_3px_25px_0px_rgba(0,0,0,0.30)]">
            <div class="w-full h-full max-md:h-52" style="background: url('{{ $popup_image }}'); background-size: cover; background-position: center;">
            </div>
            <div class="flex flex-col gap-[39.5px] max-md:gap-[25px] items-center justify-between py-5 px-[35px] max-md:px-4">
                <div class="w-full flex justify-end max-md:absolute max-md:top-5 max-md:right-8">
                    <button data-popup-close class="focus:outline-none">
                        @svg('popup-close', 'h-7 w-7 max-md:h-5 max-md:w-5')
                    </button>
                </div>
                <h2 class="w-full text-primary-400 text-4xl max-md:text-2xl font-extrabold text-center">{{ $popup_title }}</h2>
                @if($popup_form !== '')
                    @htmlform($popup_form)
                @endif
                <p class="w-full text-primary-400 drop-shadow-[0px_1px_4px_rgba(0,0,0,0.25)] text-2xl  max-md:text-lg text-center font-normal">{{ $popup_subtitle }}</p>
                <button data-popup-close class="w-full text-white underline text-2xl font-bold drop-shadow-[0px_1px_4px_rgba(0,0,0,0.25)]">{{ $popup_button }}</button>
            </div>
        </div>
    </div>
</popup-newsletter>