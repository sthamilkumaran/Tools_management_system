<div>
    <div class="drop-shadow-md px-6 py-6 lg:px-8">
        <br>
        <form class="" wire:submit.prevent='storeOvertimeData'>
            <h1
                class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-600 md:text-5xl lg:text-5xl dark:text-white text-center">
                Overtime</h1>
            <br>
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="User_id" id="User_id" wire:model='User_id'
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="User_id"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Id
                        No</label>
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="User_name" id="User_name" wire:model='User_name'
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="User_name"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name</label>
                </div>
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <label for="overTime_Message"
                    class="block mb-2 text-sm font-medium text-gray-500 dark:text-white">Reasons</label>
                <textarea id="overTime_Message" rows="4" wire:model='overTime_Message' name="overTime_Message"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Type Here Your Reasons...."></textarea>
            </div>
            <div class="grid md:grid-cols-3 md:gap-6">
                <div class="relative z-0 w-full mb-6 group">
                    <input type="time" name="start_Time" id="start_Time" wire:model='start_Time'
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="start_Time"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Estimated
                        Hours</label>
                </div>
                <span class="mx-4 text-gray-500 text-center pt-3">to</span>
                <div class="relative z-0 w-full mb-6 group">
                    <input type="time" name="end_Time" id="end_Time" wire:model='end_Time'
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="end_Time"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"></label>
                </div>
            </div>

            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Sent</button>

        </form>
    </div>
    <br>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg ">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-400 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Reasons
                    </th>
                    <th scope="col" class="px-6 py-3">
                        EST
                    </th>
                    <th scope="col" class="px-6 py-3">
                        EET
                    </th>
                    <th scope="col" class="px-6 py-3">
                        APPROVAL
                    </th>
                </tr>
            </thead>
            <tbody>
                @if ($overtime->count() > 0)
                @foreach ($overtime as $overtimes)
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $overtimes->User_id }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $overtimes->overTime_Message }}
                    </td>
                    <td class="px-6 py-4">

                        @if ($overtimes->start_Time <= 11.59 )
                            {{ $overtimes->start_Time }} AM

                        @else
                        {{ $overtimes->start_Time }} PM
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        @if ($overtimes->end_Time <= 11.59 )
                            {{ $overtimes->end_Time }} AM

                        @else
                        {{ $overtimes->end_Time }} PM
                        @endif
                    </td>
                    <td class="px-6 py-4">
                            <div class="px-3 py-1 text-xs font-medium leading-none text-center text-yellow-800 bg-yellow-200 rounded-full animate-pulse dark:bg-blue-900 dark:text-blue-200">Pending...</div>

                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="11"><small style="margin-left:30%" class="text-red-600 italic">No
                            Overtime to
                            Display.</small></td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
