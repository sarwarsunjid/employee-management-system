<template>
  <div>



<div class="row">
    <div class="card  mx-auto">
        <div v-if="showMessage">
            <div class="alert alert-success"> {{ message }}
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <form >
                <div class="float-start">
                    <div class="input-group">
                        <input type="search" v-model.lazy="search" class="form-control rounded" 
                        placeholder="Search" aria-label="Search"
                            aria-describedby="search-addon" >
                        <button type="submit" class="btn btn-outline-primary">search</button>   
                </div>
                </div>
                
                                        
                                    
            </form>
            <div class="float-end">
                <router-link :to="{ name: 'EmployeesCreate' }">Create Employee</router-link>
                <select
                                            v-model="selectedDeprtment"
                                            name="city"
                                            class="form-control"
                                            aria-label="Default select example"
                                        >
                                            <option
                                                v-for="department in departments"
                                                :key="department.id"
                                                :value="department.id"
                                                >{{ department.name }}</option
                                            >
                                        </select>
            </div>
            </div>
                
        </div>
        <div class="card-body">
            <h4 class="card-title">User List</h4>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">

                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Address</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr
                                v-for="employee in employees"
                                :key="employee.id"
                            >
                                <th scope="row">#{{ employee.id }}</th>
                                <td>{{ employee.first_name }}</td>
                                <td>{{ employee.last_name }}</td>
                                <td>{{ employee.address }}</td>
                                <td>{{ employee.department.name }}</td>
                                <td>
                                    <router-link
                                        :to="{
                                            name: 'EmployeesEdit',
                                            params: { id: employee.id }
                                        }"
                                        class="btn btn-success"
                                        >Edit</router-link
                                    >
                                    <button
                                        class="btn btn-danger"
                                        @click="deleteEmployee(employee.id)"
                                    >
                                        Delete
                                    </button>
                                </td>
                            </tr>
                       
                    </tbody>
                </table>
            </div>
    </div>
</div>
</div>


</template>

<script>
export default {
    data() {
        return {
            employees: [],
            showMessage: false,
            message: "",
            search: null,
            selectedDeprtment: null,
            departments: []
        };
    },
    watch: {
        search() {
            this.getEmployees();
        },
        selectedDeprtment() {
            this.getEmployees();
        }
    },
    created() {
        this.getEmployees();
        this.getDepartments();
    },
    methods: {
        getEmployees() {
            axios
                .get("/api/employees", {
                    params: {
                        search: this.search,
                        department_id: this.selectedDeprtment
                    }
                })
                .then(res => {
                    this.employees = res.data.data;
                })
                .catch(error => {
                    console.log(error);
                });
        },
        getDepartments() {
            axios
                .get("/api/employees/departments")
                .then(res => {
                    this.departments = res.data;
                })
                .catch(error => {
                    console.log(console.error);
                });
        },
        deleteEmployee(id) {
            axios.delete("api/employees/" + id).then(res => {
                this.showMessage = true;
                this.message = res.data;
                this.getEmployees();
            });
        }
    }
};


</script>

<style>

</style>