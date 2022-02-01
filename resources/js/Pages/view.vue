<template>
    <div class="text-center font-semibold mt-5 " >
        <h1 class="justify-content-center">
            Student Feedback System
        </h1>


        <div class="p-10">
            <table class="border-collapse  border   shadow-md  w-full">
                <thead class="border-1 rounded bg-blue-500 table-sortable text-white">
                <tr class="font-semiboldbold ">
                    <td class="" > Roll Number.<i class="fa fa-sort" style="font-size:18px"></i> </td>
                    <td>Name <i class="fa fa-sort" style="font-size:18px"></i></td>
                    <td class="" > Email.<i class="fa fa-sort" style="font-size:18px"></i> </td>
                    <td>Phone <i class="fa fa-sort" style="font-size:18px"></i></td>
                    <td>Course <i class="fa fa-sort" style="font-size:18px"></i></td>
                    <td>Subject <i class="fa fa-sort" style="font-size:18px"></i></td>
                    <td>Faculty <i class="fa fa-sort" style="font-size:18px"></i></td>
                    <td class="text-center" colspan="2">Action<i class="fa fa-sort" style="font-size:18px"></i> </td>

                </tr>
                </thead>
                <tbody>
                <tr v-for="(item, index) in tableData" class="border h-10" >
                    <td>{{item.roll_no}}</td>
                    <td>{{item.name}} </td>
                    <td>{{item.email}}</td>
                    <td>{{item.phone}} </td>
                    <td>{{item.course}}</td>
                    <td>{{item.subject}} </td>
                    <td>{{item.faculty}} </td>
                    <td>
                        <div style="display: flex; align-items: center;">
                            <a :href="'/edit/'+item.id">
                                <svg xmlns="http://www.w3.org/2000/svg" style="color: red; " width="20" height="20" fill="currentColor">
                                    <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                    <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" @click.prevent="deleteData(item.id)">
                                <svg xmlns="http://www.w3.org/2000/svg" style="color: red; " width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </a>
                        </div>
                    </td>

                </tr>
                </tbody>

            </table>
        </div>
    </div>
</template>

<script>
export default {
    name:"view",
    data(){
        return{
            tableData:[]
        }
    },
    methods:{
        fetchList(){
            axios.post('/api/noetic/list').then(response =>{
                if(response.status === 200){
                    this.tableData = response.data.data
                }
            })
        },
        deleteData(id){
            const payload ={
                id: id
            }
            axios.post('/api/noetic/ditemte', payload).then(response =>{
                if(response.status === 200){
                    this.fetchList();
                }
            })
        }
    },


    created() {
        this.fetchList();

    }
}
</script>

<style scoped>

</style>
