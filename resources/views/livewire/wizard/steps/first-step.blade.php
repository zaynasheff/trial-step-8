<div class="self-stretch grow shrink basis-0 px-5 py-4 bg-[#24201f] flex-col justify-center items-center flex">
    <div class="flex-col justify-start items-start flex">
         <div class="self-stretch  flex-col justify-center items-center gap-8 flex">
                <div class="flex-col justify-start items-center flex">
                    <div class="text-center text-white text-6xl font-normal font-['Inter'] leading-[60px]">Select account role</div>
                </div>
                <div class="flex-col justify-start items-start gap-8 flex w-full">
                    <div class="flex flex-col gap-2 w-full">
                        <label for="role" class="text-[#868484] text-sm font-semibold font-['Inter'] ">Select account role...</label>
                        <div class="flex items-center justify-beetwen gap-3">
                            <select wire:model="role" id="role" class="flex flex-1 rounded-md border border-white bg-transparent text-white px-3 py-1.5 appearance-none">
                                <option value="">Select role</option>
                                <option value="Manager">Manager</option>
                                <option value="Test">Test</option>
                            </select>
                            <div class="flex justify-end">
                                <img class="w-[16px] h-[16px] relative" src="img/arrow-down.svg" alt="arrow"/>
                            </div>
                        </div>
                        @error('role')
                            <p class="text-[#ff0033]">{{$message}}</p>
                        @enderror
                    </div>
                    <button wire:click="submit" type="button" class="w-full px-3 h-[44px] bg-[#ec542e] rounded-lg flex justify-between	 items-center w-[167px]">
                        <span class="text-center text-[#231F20] text-sm font-medium font-['Inter'] uppercase leading-tight">Next</span>
                        <img class="w-[14px] h-[10px]" src="img/arrow-right.svg" alt="arr"/>
                    </button>
                </div>
            </div>
    </div>
</div>


