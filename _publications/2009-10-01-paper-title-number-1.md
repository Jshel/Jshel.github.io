---
title: "RepliGuard: Policy-Driven Replica Management Framework for Protecting against Acoustic Attacks"
collection: publications
category: manuscripts
permalink: /publication/RepliGuard
excerpt: 'With the rapid expansion of data center infrastructure driven by the AI boom and the growing energy demands, companies have
begun deploying underwater data centers, leveraging water’s natural cooling properties. While promising in terms of sustainability
and efficiency, underwater environments introduce unique secu-rity vulnerabilities, particularly susceptibility to acoustic attacks targeting storage systems. Proposed defense strategies are limited to disk-level detection, while system-level mitigations remain absent. In this work, we present RepliGuard, a novel vulnerability-aware policy-driven replica management framework integrated
with CockroachDB. Our system combines OS-level detection using Extended Berkeley Packet Filter (eBPF) probes with a policy-driven replica relocation scheme to mitigate the attack impact without requiring low-level disk access or sacrificing node functionality. Our LSTM-based model achieves a true positive rate of 99.4% and a true negative rate of 99.1% when detecting subtle acoustic attacks against hybrid SDD cache-based architectures, and takes approximately 0.5 seconds to detect subtle attacks with an inference latency of 0.27 ms per prediction compared to 30-second detection of previous works. Although CockroachDB’s automatic replica rebalancing scheme fails to mitigate the attack and instead increases the cluster’s P99 SQL service latency by 215% in our testbed, our proposed mitigation dynamically reassigns replicas to unaffected nodes, reducing the attack impact by approximately 83% while preserving node functionality and activating within 2 seconds. This work demonstrates the first vulnerability-aware, system-level strategy to ensure resiliency against subtle acoustic attacks.'
date: 2026-07-05
venue: 'SecDev 2026'
paperurl: 'https://academicpages.github.io/files/RepliGuard.pdf'
---
The contents above will be part of a list of publications, if the user clicks the link for the publication than the contents of section will be rendered as a full page, allowing you to provide more information about the paper for the reader. When publications are displayed as a single page, the contents of the above "citation" field will automatically be included below this section in a smaller font.
