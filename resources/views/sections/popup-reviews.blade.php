<reviews-component class="Popup-review">
    <div class="relative">
        @forEach($reviews as $review)
            <div data-review class="absolute bottom-0 left-0 md:top-0 transition-all ease-in-out duration-500 transform translate-y-0 bg-[#F4EADB] rounded-[15px] py-4 px-2 text-left grid grid-cols-[89px_170px_70px] gap-[9px] w-[397px] custom-small-screen  md:h-fit md:w-auto hidden-review justify-center place-items-center">

        
                {!! wp_get_attachment_image($review['review_image'], 'header_logo rounded-[10px] w-[89px] h-[96px] object-cover', false, ['loading' => 'lazy']) !!}

                <div class="flex flex-col ">
                    <p class="text-[#61442c] text-base font-extrabold font-['Poppins'] leading-[19px]">
                        <strong>{{ $review['review_title'], }}</strong>
                    </p>
                    <p class="text-[#61442c] text-base font-normal font-['Poppins'] leading-[19px]">
                        {{ $review['review_subtitle'] }}
                    </p>
                    <p class="text-[#61442c] text-[11px] font-light font-['Poppins'] leading-tight">
                        {{ $review['review_time'] }}
                    </p>
                </div>
                <div class="flex flex-col items-center justify-center gap-2">
                    <div class="flex w-[82.6px] text-[#FFEA2A] drop-shadow-[-1px_1px_1.1px_rgba(0,0,0,0.35)]">
                        @php
                            $fullStars = floor($review['review_number']);
                            $hasHalfStar = fmod($review['review_number'], 1) >= 0.5;
                            $emptyStars = 5 - $fullStars - ($hasHalfStar ? 1 : 0);
                        @endphp
                        
                        @for ($i = 0; $i < $fullStars; $i++)
                            @svg('gmdi-star-o', 'h-5 w-5')
                        @endfor
                        
                        @if ($hasHalfStar)
                            @svg('gmdi-star-half', 'h-5 w-5')
                        @endif
                        
                        @for ($i = 0; $i < $emptyStars; $i++)
                            @svg('gmdi-star-outline-o', 'h-5 w-5')
                        @endfor
                    </div>
                    <p class="  w-[69px] pt-[5px] pb-[5px] text-2xl font-extrabold font-['Poppins'] bg-primary rounded-[27px] text-white text-center ">
                        {{ $review['review_number'] }}
                    </p>
                </div>
                <div data-review-close class="popup-close rounded-full bg-primary h-fit w-fit p-2 absolute right-[-10px] top-[-10px]">
                    @svg('popup-close', 'h-5 w-5 max-md:h-5 max-md:w-5')
                </div> 
               
            </div>
        @endforEach
    </div>
</reviews-component>