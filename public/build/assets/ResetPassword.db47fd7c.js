import{A as f,_ as w}from"./Auth.76b24869.js";import{a as _,A as b,b as h}from"./AuthInputErrors.937989b5.js";import{A as x}from"./AuthCheckbox.7d12d385.js";import{r,o as m,c as u,a as s,b as o,t as g,d as k,w as v,e as y,n as V,f as A}from"./app.b6150d7e.js";import{_ as P}from"./_plugin-vue_export-helper.cdc0426e.js";const C={layout:f,components:{AuthInput:_,AuthLabel:b,AuthCheckbox:x,AuthButton:w,AuthInputErrors:h},props:{auth:Object,email:String,errors:Object,token:String},data(){return{form:this.$inertia.form({token:this.token,email:this.email,password:"",password_confirmation:""})}},methods:{submit(){this.form.post(this.route("password.update"),{onFinish:()=>this.form.reset("password","password_confirmation")})}}},B={class:"container mx-auto px-4 h-full"},N={class:"flex content-center items-center justify-center h-full"},S={class:"w-full lg:w-6/12 px-4"},j={class:"dark:bg-gray-700 relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-200 border-0"},q={class:"rounded-t mb-0 px-6 py-6"},E=s("div",{class:"text-center mb-3"},[s("h6",{class:"dark:text-gray-200 text-blueGray-500 text-sm font-bold"}," Reset Password ")],-1),L={key:0,class:"mb-4 font-medium text-sm text-green-600"},R={class:"relative w-full mb-3"},U={class:"relative w-full mb-3"},G={class:"relative w-full mb-3"},I={class:"text-center mt-6"};function O(n,t,z,D,e,d){const c=r("auth-input-errors"),l=r("auth-label"),i=r("auth-input"),p=r("auth-button");return m(),u("div",B,[s("div",N,[s("div",S,[s("div",j,[s("div",q,[E,o(c,{class:"mb-4"}),n.status?(m(),u("div",L,g(n.status),1)):k("",!0),s("form",{onSubmit:t[3]||(t[3]=v((...a)=>d.submit&&d.submit(...a),["prevent"]))},[s("div",R,[o(l,{for:"email",value:"Email",class:"dark:text-gray-200"}),o(i,{id:"email",type:"email",class:"dark:bg-gray-600 dark:text-white mt-1 block w-full",modelValue:e.form.email,"onUpdate:modelValue":t[0]||(t[0]=a=>e.form.email=a),required:"",autofocus:"",autocomplete:"username"},null,8,["modelValue"])]),s("div",U,[o(l,{for:"password",value:"Password",class:"dark:text-gray-200"}),o(i,{label:"Password",forLabel:"password",id:"password",type:"password",class:"dark:bg-gray-600 dark:text-white mt-1 block w-full",modelValue:e.form.password,"onUpdate:modelValue":t[1]||(t[1]=a=>e.form.password=a),required:"",autocomplete:"new-password"},null,8,["modelValue"])]),s("div",G,[o(l,{for:"password_confirmation",value:"Confirm Password",class:"dark:text-gray-200"}),o(i,{label:"Password",forLabel:"password_confirmation",id:"password_confirmation",type:"password",class:"dark:bg-gray-600 dark:text-white mt-1 block w-full",modelValue:e.form.password_confirmation,"onUpdate:modelValue":t[2]||(t[2]=a=>e.form.password_confirmation=a),required:"",autocomplete:"new-password"},null,8,["modelValue"])]),s("div",I,[o(p,{class:V({"opacity-25":e.form.processing}),disabled:e.form.processing},{default:y(()=>[A(" Reset Password ")]),_:1},8,["class","disabled"])])],32)])])])])])}const K=P(C,[["render",O]]);export{K as default};
