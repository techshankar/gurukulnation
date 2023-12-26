@extends('common.layout')
@section('content')
<main>
    <section class="gold-banner-section">
        <div class="container">
            <div style="margin-top: 50px;">

                <h2>Terms and Conditions</h2>

            </div>
        </div>
    </section>
    <section class="terms-section">
        <div class="container">

            <p><b>Introduction</b></p>
            <p>Welcome to GURUKUL NATION, referred to as “organization”, “we”, “us”, or “our”!</p>
            <p>These terms of service (“terms”) oversee your utilization of our website at Gurukul Nation.com, operated by GURUKUL NATION.</p>
            <p>Our privacy policy also dictates your use of our service, detailing how we gather, protect, and disclose data from your use of our web pages.</p>
            <p>By using our service, you confirm that you have read, understood, and agree to these terms and our privacy policy (“agreements”). If you disagree with these agreements, please refrain from using our service. If you have concerns, reach out to us at <a href="mailto:refunds@gurukulnation.com" target="_blank" class="email">refunds@gurukulnation.com</a>. These terms are applicable to all visitors and users of our service.</p>
            <br>

            <p><b>Communications</b></p>
            <p>By accessing our service, you consent to receive newsletters, promotional materials, and other information. If you wish to opt-out, you can do so by clicking the unsubscribe link or emailing <a href="mailto:refunds@gurukulnation.com" target="_blank" class="email">refunds@gurukulnation.com</a>.</p>
            <br>

            <p><b>Purchases</b></p>
            <p>For any product or service purchase (“purchase”) through our service, you might be required to provide certain information, including payment details and shipping information.</p>
            <p>You confirm that: (i) you are authorized to use any payment method you provide; and (ii) the information you provide is accurate and complete.</p>
            <p>We might use third-party services to process payments and complete purchases. By providing your details, you allow us to share this information with these third parties as per our privacy policy.</p>
            <p>We may decline or cancel your order for various reasons, including product availability, pricing errors, or suspected fraud.</p>
            <br>

            <p><b>Contests, Sweepstakes and Promotions</b></p>
            <p>Promotions available through our service might have separate rules from these terms. If you participate, please review the specific rules and our privacy policy. If there's a conflict between the promotion rules and these terms, the former will prevail.</p>
            <br>

            <p><b>Subscriptions</b></p>
            <p>Certain parts of our service are subscription-based. You'll be billed in advance based on the subscription type you choose.</p>
            <p>Your subscription will auto-renew unless cancelled by you or us. To cancel, use your online account or contact our customer support at <a href="mailto:refunds@gurukulnation.com" target="_blank" class="email">refunds@gurukulnation.com</a>.customer support team.</p>
            <p>You must provide accurate billing information and authorize us to charge the subscription fees to your payment method</p>
            <p>If billing fails, we reserve the right to terminate your access immediately.</p>
            <br>
            
            <p><b>Content</b></p>
            <p>Our service lets you post and share various content. You're responsible for the legality and appropriateness of any content you post.</p>
            <p>By posting, you confirm that you own the content or have the right to use and share it. We may terminate accounts found violating copyrights.</p>
            <p>You retain rights to your content but grant us a license to use, modify, and distribute it. We may also allow other users to access and use your content.</p>
            <p>We may monitor and edit user content but aren't obligated to.</p>
            <br>

            <p><b>Prohibited Uses</b></p>
            <p>You must use our service lawfully and ethically. Prohibited actions include exploiting minors, sending unsolicited promotions, impersonating others, and any illegal activities.</p>
            <p>You also shouldn't interfere with the service's functionality or attempt unauthorized access.</p>
            <br>

            <p><b>Analytics</b></p>
            <p>We might use third-party providers to analyse our service usage.</p>
            <br>

            <p><b>Account creation and management</b></p>
            <p>When you set up an account with us, you affirm that you are at least 18 years old and that all the details you've provided are accurate, up-to-date, and complete. Providing misleading, outdated, or incomplete details could lead to the immediate deactivation of your account.</p>
            <p>It's your responsibility to keep your account details and password confidential. This includes ensuring that unauthorized individuals don't access your computer or account. You agree to be accountable for all actions taken under your account or password, regardless of whether the password is associated with our service or another provider. Should you notice any security breaches or unauthorized access to your account, please inform us right away.</p>
            <p>Your chosen username should not impersonate another individual or entity, infringe on the rights of others, or be considered offensive, inappropriate, or vulgar.</p>
            <p>We hold the authority to deny service, deactivate accounts, modify or delete content, or cancel requests at our discretion.</p>
            <br>

            <p><b>Intellectual Property</b></p>
            <p>The service, along with its inherent content (excluding user-contributed content), features, and functionalities, are the sole and exclusive property of GURUKUL NATION private limited and its licensors. The service is safeguarded by copyright, trademark, and other domestic and international legal statutes. Utilizing our trademarks in association with any product or service without GURUKUL NATION prior written approval is prohibited.</p>
            <br>

            <p><b>Copyright Policy</b></p>
            <p>We hold the intellectual property rights of others in high regard. Our stance is to promptly address any allegations that content displayed on our service violates the copyright or other intellectual property rights ("infringement") of any individual or organization.</p>
            <p>If you own a copyright, or are representing a copyright owner, and are of the opinion that a copyrighted work has been replicated in a manner that infringes upon copyright laws, we encourage you to forward your complaint via email to <a href="mailto:refunds@gurukulnation.com" target="_blank" class="email">refunds@gurukulnation.com</a>. Please use the subject line "copyright infringement" and provide a comprehensive account of the purported infringement, as elaborated in the section "DMCA notice and procedure for copyright infringement claims" below.</p>
            <p>Please be aware that if you falsely allege or make claims in bad faith regarding the infringement of any content accessed via our service on your copyright, you may be liable for damages, including legal fees and other related expenses.</p>
            <br>

            <p><b>Refund</b></p>
            <p>For refund details, <a href="{{ URL::to('refund-policy') }}">click here.</a></p>
            <br>

            <p><b>Procedure for reporting copyright infringements under DMCA</b></p>
            <p>If you believe that your copyrighted material has been infringed upon, you can file a complaint under the digital millennium copyright act <b>(DMCA)</b>. To do so, please furnish our designated copyright agent with the following details in writing (refer to 17 U.S.C 512(c)(3) for more specifics):</p>
            <p><b>1.</b> A digital or physical signature of the individual authorized to represent the copyright owner.</p>
            <p><b>2.</b> A detailed description of the copyrighted content you believe has been violated, including either the web address (URL) where this content can be found or a physical copy of the work.</p>
            <p><b>3.</b> The exact URL or location within our service where you suspect the infringing material is located.</p>
            <p><b>4.</b> Your contact details: address, phone number, and email address.</p>
            <p><b>5.</b> A statement from you, asserting your genuine belief that the use in question has not been approved by the copyright holder, its representative, or the law.</p>
            <p><b>6.</b> A declaration from you, made under the risk of perjury, confirming that the information provided in your notice is accurate and that you either own the copyright or are authorized to act on behalf of the copyright owner.</p>
            <p>For any queries or to submit your complaint, please reach out to our copyright agent at <a href="mailto:refunds@gurukulnation.com" target="_blank" class="email">refunds@gurukulnation.com</a>.</p>
            <br>

            <p><b>Feedback & suggestions</b></p>
            <p>You're welcome to share feedback, report errors, or suggest improvements either directly at <a href="mailto:refunds@gurukulnation.com" target="_blank" class="email">refunds@gurukulnation.com</a>. or through third-party platforms related to our service ("suggestions"). By doing so, you understand and agree that: (i) you won't claim any intellectual property rights or any other rights, title, or interest in the suggestions; (ii) our company might have ideas similar to your suggestions; (iii) your suggestions don't include confidential or proprietary information, either from you or others; and (iv) we're not obligated to keep your suggestions confidential. If, due to certain binding laws, transferring ownership of suggestions isn't feasible, you grant our company and its partners an exclusive, transferable, irrevocable, complimentary, sub-licensable, unlimited, and everlasting right to utilize (including reproduce, alter, adapt, publish, distribute, and monetize) the suggestions for any intent or purpose.</p>
            <br>

            <p><b>Links To Other Sites</b></p>
            <p>Our service might include links to websites or services owned by third parties, which are not under the purview of GURUKUL NATION .</p>
            <p>GURUKUL NATION  doesn't have authority over, nor does it take responsibility for, the content, privacy guidelines, or practices of any third-party websites or services. We don't endorse the offerings of any such entities or their platforms.</p>
            <p>Your contact information may be used by us to reach out (call/sms) via a third-party platform/vendor.</p>
            <p>You understand and agree that GURUKUL NATION  is not liable, either directly or indirectly, for any harm or loss resulting from or related to the use of or dependence on content, products, or services from any third-party websites or services.</p>
            <p>We highly recommend reviewing the terms and privacy policies of any third-party sites or services you access.</p>
            <p>We might link to third-party sites, but we don't control or endorse them.</p>
            <br>

            <p><b>Disclaimer Of Warranty</b></p>
            <p>No warranty assurance</p>
            <p>The services offered by the company are provided "as is" and "as available", without any guarantees or promises. The company does not assure or guarantee, either directly or impliedly, regarding the functioning of their services or the information, content, or materials included. You agree that any engagement with these services and their content, along with any services or items acquired from us, is entirely at your own risk.</p>
            <p>No representative of the company or any affiliated individual guarantees or assures the comprehensiveness, security, reliability, standard, truthfulness, or availability of the services. To elaborate, neither the company nor its associates claim that the services, along with their content or any services or items acquired through them, will be dependable, accurate, without errors, continuous, or that any flaws will be rectified. There is no assurance that the services or the servers powering them are free from viruses or other detrimental elements, or that the services or any items acquired will fulfil your requirements or expectations.</p>
            
            <p>The company expressly renounces all warranties, be they direct or implied, legal or otherwise, including but not restricted to warranties of marketability, non-violation of rights, and suitability for a specific use.</p>
            <p>The above statements do not impact any warranties that cannot be waived or restricted as per the relevant laws.</p>
            <br>

            <p><b>Limitation Of Liability</b></p>
            <p>Unless forbidden by applicable law, you agree to exempt us, along with our executives, directors, employees, and representatives, from any indirect, incidental, special, punitive, or consequential losses or damages, regardless of how they occur. This includes legal fees, litigation-related expenses, costs of arbitration, and any other related charges, whether or not legal proceedings are initiated. Such damages could arise from contractual actions, negligence, or other civil wrongs resulting from or related to this agreement. This also covers claims related to personal injuries, property damages, or any breaches of local, state, or federal laws, rules, or regulations. This holds even if the company was previously informed of the possibility of such damages. If the company is found liable, any liability on our part will be restricted to the amount you paid for the products or services. Under no situation will there be any claim for consequential or punitive damages. Certain jurisdictions do not permit the exclusion or limitation of incidental, consequential, or punitive damages, so some of the above limitations may not apply to you.</p>
            <br>


            <p><b>End of service</b></p>
            <p>We reserve the right to terminate or suspend your account and restrict access to our service instantly, without any prior notification or liability, at our sole discretion, for any reason, including but not limited to a violation of the terms.</p>
            <p>If you decide to end your account, you can simply stop using our service.</p>
            <p>Any sections of the terms that are inherently intended to remain in effect post-termination will continue to be in force, including but not limited to clauses related to ownership, warranty disclaimers, indemnification, and liability limitations.</p>
            <br>
            <p><b>Stay alert to scams</b></p>
            <p>Please be mindful of the following guidelines:</p>

            <p>
            <b>1)</b> the GURUKUL NATION support team communicates exclusively through official email ids ending in @GURUKULNATION.com (e.g., info@GURUKULNATION.com) and <a href="mailto:gurukulnationofficial@gmail.com" target="_blank" class="email">gurukulnationofficial@gmail.com</a>. Avoid interactions from any other email addresses.
            </p>
            <p>
            <b>2)</b> our support team will never request OTPs, your GURUKUL NATION account password, or any other passwords. Be cautious of anyone asking for such details.
            </p>
            <p>
            <b>3)</b> GURUKUL NATION's sole official support number is <b>+91-8567856753</b>. Please direct all inquiries to this number or email us at <a href="mailto:support@gurukulnation.com" target="_blank" class="email">support@gurukulnation.com</a>. Avoid contacting any other numbers.
            </p>
            <p>
            <b>Be</b>ware of unofficial groups and rely only on our verified channels for accurate information.
            </p>
            <p>
            <b>5)</b> the GURUKUL NATION affiliate/customer support team will never request payments for training, promotions, or post-course support. Any paid training or chargeable events will be announced solely on our official channels. Be wary of anyone demanding money on behalf of GURUKUL NATION.
            </p>
            <p>
            <b>6)</b> do not collect registration fees (whether full or partial) from leads into your personal account. Engaging in such activities may result in the suspension or permanent deactivation of your affiliate id. Ensure all registrations are processed through official payment methods (affiliate link, GURUKUL NATION RAZORPAY link, GURUKUL NATION official UPI, or direct transfers to the company's bank account).
            </p>
            <p>
            <b>7)</b> GURUKUL NATION is not liable for transactions made to any individual accounts, including those of company employees, outside of the official GURUKUL NATION bank account. Always exercise caution.
            </p>
            <br>
            <p><b>Affiliate guidelines</b></p>

            <p>
                <b>Definitions:-</b>
            </p>
            <p>
                <b>Lead:</b> An individual showing interest in or wanting to purchase the product.
            </p>
            <p>
                <b>Customer/Client:</b> An individual who has bought the product
            </p>
            <p>
                <b>Sponsor:</b> The person who introduced you to the product.
            </p>
            <p>
                <b>Affiliate:</b> An individual promoting the product.
            </p>

            <p>Disclaimer: </p>

            <p>
            <b>1)</b> at GURUKUL NATION , we strive for accuracy in representing our products, services, potential income, and results. Income statements made by our company and affiliates are merely estimates. There's no assurance you'll achieve these income levels. Each individual's success is influenced by factors like effort, experience, expertise, and motivation. Past earnings examples aren't indicative of future results. We're not accountable for your actions. Any information, products, or services from us should be used based on your own discretion.
            </p>
            <p>
            <b>2)</b> do not use our company name or its variations for your domain names or social media profiles.
            </p>
            <p>
            <b>3)</b> <b>content responsibility:</b> do not promote our content on websites with misleading, defamatory, or offensive content.
            </p>
            <p>
            <b>4)</b> <b>transparency in affiliation:</b> Do not misrepresent your relationship with GURUKUL NATION. You cannot claim to be an agent or employee of GURUKUL NATION or suggest any unauthorized affiliations.
            </p>
            <p>
            <b>5)</b> Affiliate commissions are paid weekly. If your account is terminated due to these terms' violation, we may withhold all future payments.

            </p>
            <p>
            <b>6)</b> If affiliate commissions' payment in any jurisdiction is deemed illegal, we might not pay commissions for sales in that region.
            </p>
            <p>
            <b>7)</b> We may retain your final payment for a reasonable duration to ensure accurate payment.

            </p>

            <p>
            <b>8)</b> We may occasionally update these terms to reflect new practices or clarify existing ones. Any significant change will be communicated via email. Changes become effective once posted.
            </p>

            <p>
                <b>Prohibited activities in GURUKUL NATION</b>
            </p>

            <p>
              <b>1)</b> offering GURUKUL NATION courses at discounted rates through unauthorized cashbacks, discounts, or any promotions not sanctioned by the company.
            </p>
            <p>
             <b>2)</b> transferring or selling your affiliate account to another party.
            </p>
            <p>
              <b>3)</b> showcasing deceptive earnings or income proofs by altering your dashboard, using another person's dashboard, or presenting misleading data to potential customers or leads.

            </p>
            <p>
              <b>4)</b> posing as a potential customer or lead to gather insights from existing affiliates about their promotional strategies.
            </p>
            <p>
              <b>5)</b> engaging in disrespectful or offensive communication with GURUKUL NATION's education partners, service partners, or staff.

            </p>
            <p>
              <b>6)</b> distorting or misrepresenting any information related to GURUKUL NATION.
            </p>
            <p>
              <b>7)</b> marketing other affiliate programs or mlm schemes to GURUKUL NATION's affiliates or customers.

            </p>
            <p>
                <b>NOTE :</b>
            </p>
            <p>
              GURUKUL NATION will not intervene, address, or attempt to settle any personal disagreements (such as monetary exchanges, conflicts on any topic, etc.) Between leads, affiliates, or between affiliates and their leads.
            </p>

            <p><b>Jurisdiction and interpretation</b></p>
            <p>The interpretation and enforcement of these terms will be governed by the laws of Uttar Pradesh, without giving effect to any principles of conflicts of laws.</p>
            <p>Any lack of action on our part to enforce any provision of these terms should not be construed as a waiver of that provision or any other provision. Should any provision within these terms be deemed unlawful or unenforceable by a court, all other provisions will remain in full force and effect. These terms represent the complete understanding between us concerning our service and take precedence over any prior or contemporaneous agreements or understandings, whether oral or written, relating to the service.</p>

            <p><b>Modifications to the service</b></p>
            <p>At our sole discretion, we may modify or discontinue our service or any part of it without prior notice. We are not responsible for any unavailability of the service, whether it's a complete shutdown or partial disruption. Occasionally, we might limit access to certain sections of the service or the entire platform, applicable to both registered and unregistered users.</p>
            <br>

            <p><b>Updates to the terms</b></p>
            <p>We hold the right to update or modify these terms at any given time, and such changes will be reflected on this site. It's your duty to regularly review these terms to stay informed.</p>
            <br>

            <p>If you continue to use the platform after the updated terms have been posted, it signifies your acceptance of those changes. It's crucial for you to frequently check this page to stay updated on any modifications, as they are obligatory for you.</p>

            <p>If you continue to utilize our service after changes are implemented, you consent to the updated terms. If you disagree with the updated terms, you should cease using the service.</p>
            <br>

            <p><b>Add-on Terms</b></p>
            <p><b>1)</b> all add-ons are non-refundable once purchased.</p>
            <p><b>2)</b> the specifics and features of add-ons may be altered or updated without prior notice.</p>
            <p><b>3)</b> add-ons are tied to active packages. If a package is refunded or deactivated, associated add-ons will also become inactive and unavailable.</p>
            <br>

            <p><b>Waiver and clause independence</b></p>
            <p><b>1)</b> any failure by the company to enforce or exercise any provision of the terms, or any related right, shall not constitute a waiver of that provision or right. No waiver by the company of any term or condition outlined in the terms should be interpreted as an ongoing waiver of that term or any other term or condition.</p>
            <p><b>2)</b> should a court or relevant legal authority deem any provision of the terms as invalid, unlawful, or unenforceable, that provision will be adjusted or removed to the smallest extent necessary. This ensures that the remaining provisions within the terms remain valid and enforceable in their entirety.</p>
            <br>

            <p><b>Acknowledgment and eligibility</b></p>
            <p>By utilizing our service or any other services we offer, you confirm that you have reviewed and understand these terms of service and consent to adhere to them.</p>
            <p>Only citizens of India with valid documentation, such as an aadhar card, pan card, and an Indian bank account, are eligible to operate as an "affiliate marketer" with us.</p>
        </div>
    </section>
</main>
@endsection