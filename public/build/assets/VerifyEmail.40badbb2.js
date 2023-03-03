import{A as _,_ as h}from"./Auth.76b24869.js";import{r as i,o as r,c as n,a as e,d as b,w as g,b as a,e as d,n as p,f as c}from"./app.b6150d7e.js";import{_ as x}from"./_plugin-vue_export-helper.cdc0426e.js";const y={layout:_,components:{AuthButton:h},props:{auth:Object,errors:Object,status:String},data(){return{form:this.$inertia.form()}},methods:{submit(){this.form.post(this.route("verification.send"))}},computed:{verificationLinkSent(){return this.status==="verification-link-sent"}}},v={class:"container mx-auto px-4 h-full"},k={class:"flex content-center items-center justify-center h-full"},w={class:"w-full lg:w-4/12 px-4"},j={class:"dark:bg-gray-700 relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-200 border-0"},V={class:"rounded-t mb-0 px-6 py-6"},B=e("div",{class:"text-center mb-3"},[e("h6",{class:"dark:text-gray-200 text-blueGray-500 text-sm font-bold"}," Reset Password ")],-1),L=e("div",{class:"dark:text-gray-300 mb-4 text-sm text-gray-600"}," Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another. ",-1),A={key:0,class:"mb-4 font-medium text-sm text-green-600"},C={class:"mt-4 flex items-center justify-between"},N={class:"mt-4 flex items-center justify-between"};function S(l,s,E,O,o,t){const u=i("auth-button"),m=i("Link");return r(),n("div",v,[e("div",k,[e("div",w,[e("div",j,[e("div",V,[B,L,t.verificationLinkSent?(r(),n("div",A," A new verification link has been sent to the email address you provided during registration. ")):b("",!0),e("form",{onSubmit:s[0]||(s[0]=g((...f)=>t.submit&&t.submit(...f),["prevent"]))},[e("div",C,[a(u,{class:p({"opacity-25":o.form.processing}),disabled:o.form.processing},{default:d(()=>[c(" Resend Verification Email ")]),_:1},8,["class","disabled"])]),e("div",N,[a(m,{href:l.route("logout"),method:"post",as:"button",class:"dark:text-gray-300 w-full underline text-sm text-gray-600 hover:text-gray-900"},{default:d(()=>[c("Log Out")]),_:1},8,["href"])])],32)])])])])])}const z=x(y,[["render",S]]);export{z as default};